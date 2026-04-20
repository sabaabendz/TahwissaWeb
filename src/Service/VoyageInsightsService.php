<?php

namespace App\Service;

use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class VoyageInsightsService
{
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $openRouterApiKey,
        private ReservationVoyageRepository $reservationRepo,
        private VoyageRepository $voyageRepo,
    ) {}

    public function isEnabled(): bool
    {
        return !empty($this->openRouterApiKey) && $this->openRouterApiKey !== 'no_key';
    }

    /**
     * Gather stats and ask Gemini for actionable business insights.
     */
    public function generateInsights(): ?string
    {
        if (!$this->isEnabled()) {
            return null;
        }

        $voyageStats = $this->voyageRepo->getStats();
        $reservationStats = $this->reservationRepo->getStats();

        // Top destinations by bookings
        $conn = $this->reservationRepo->createQueryBuilder('r')
            ->getEntityManager()->getConnection();

        $topDest = $conn->executeQuery("
            SELECT v.destination, COUNT(r.id) as reservations, COALESCE(SUM(r.montantTotal),0) as revenu
            FROM reservationvoyage r JOIN voyage v ON r.id_voyage = v.id
            GROUP BY v.destination ORDER BY reservations DESC LIMIT 5
        ")->fetchAllAssociative();

        $recentTrend = $conn->executeQuery("
            SELECT DATE_FORMAT(dateCreation, '%Y-%m') as mois, COUNT(*) as total
            FROM reservationvoyage
            WHERE dateCreation >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
            GROUP BY mois ORDER BY mois ASC
        ")->fetchAllAssociative();

        // Build data summary
        $dataBlock = "=== VOYAGES ===\n";
        $dataBlock .= "Total voyages: {$voyageStats['total']}, Actifs: {$voyageStats['actifs']}\n";
        $dataBlock .= "Places disponibles: {$voyageStats['places']}, Prix moyen: {$voyageStats['prixMoyen']} TND\n\n";

        $dataBlock .= "=== RÉSERVATIONS ===\n";
        $dataBlock .= "Total: {$reservationStats['total']}, Confirmées: {$reservationStats['confirmees']}, ";
        $dataBlock .= "En attente: {$reservationStats['enAttente']}, Annulées: {$reservationStats['annulees']}\n";
        $dataBlock .= "Revenu total (confirmées): {$reservationStats['revenu']} TND\n\n";

        if ($topDest) {
            $dataBlock .= "=== TOP DESTINATIONS ===\n";
            foreach ($topDest as $d) {
                $dataBlock .= "- {$d['destination']}: {$d['reservations']} réservations, {$d['revenu']} TND\n";
            }
            $dataBlock .= "\n";
        }

        if ($recentTrend) {
            $dataBlock .= "=== TENDANCE MENSUELLE (6 derniers mois) ===\n";
            foreach ($recentTrend as $m) {
                $dataBlock .= "- {$m['mois']}: {$m['total']} réservations\n";
            }
        }

        $prompt = <<<PROMPT
Tu es un analyste business expert pour Tahwissa, une agence de voyages tunisienne.

Voici les données actuelles de l'activité voyages:

{$dataBlock}

Analyse ces données et fournis:
1. **Résumé** — Un paragraphe résumant la performance globale
2. **Points forts** — 2-3 points positifs identifiés
3. **Alertes** — 2-3 risques ou problèmes à surveiller
4. **Recommandations** — 3-4 actions concrètes pour améliorer le chiffre d'affaires

Réponds en français, de manière concise et professionnelle. Utilise du Markdown pour la mise en forme. Maximum 400 mots.
PROMPT;

        try {
            $response = $this->httpClient->request('POST', self::API_URL, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->openRouterApiKey,
                ],
                'json' => [
                    'model' => 'google/gemini-2.5-flash-lite',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'temperature' => 0.6,
                    'max_tokens' => 800,
                ],
                'timeout' => 20,
            ]);

            if ($response->getStatusCode() !== 200) {
                return null;
            }

            $data = $response->toArray();
            return trim($data['choices'][0]['message']['content'] ?? '');
        } catch (\Throwable) {
            return null;
        }
    }
}
