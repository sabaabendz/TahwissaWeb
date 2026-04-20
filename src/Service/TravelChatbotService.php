<?php

namespace App\Service;

use App\Entity\Voyage;
use App\Repository\VoyageRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TravelChatbotService
{
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';

    public function __construct(
        private HttpClientInterface $httpClient,
        private VoyageRepository $voyageRepository,
        private string $openRouterApiKey,
    ) {}

    public function isEnabled(): bool
    {
        return !empty($this->openRouterApiKey) && $this->openRouterApiKey !== 'no_key';
    }

    /**
     * Send a message to the chatbot and get a response with optional voyage recommendations
     */
    public function chat(string $userMessage, array $conversationHistory = []): array
    {
        if (!$this->isEnabled()) {
            return [
                'success' => false,
                'reply' => '🔑 Le chatbot n\'est pas configuré. Définissez OPENROUTER_API_KEY dans le fichier .env.',
                'recommendedVoyages' => [],
                'tokensUsed' => 0,
            ];
        }

        // Build the voyage catalog context from the database (read-only from table voyage)
        $voyages = $this->voyageRepository->findAvailable();
        $catalog = $this->buildCatalog($voyages);

        $systemInstruction = <<<PROMPT
Tu es **Tahwissa AI** 🌍, l'assistant de voyage intelligent de l'agence Tahwissa (Tunisie).

## Ton rôle :
- Aider les clients à choisir le voyage idéal parmi le catalogue
- Donner des recommandations personnalisées selon le budget, la destination, les dates souhaitées
- Répondre aux questions sur les voyages, les destinations tunisiennes et le processus de réservation
- Être chaleureux, enthousiaste et professionnel

## Catalogue des voyages actuellement disponibles :
{$catalog}

## Règles strictes :
1. Quand tu recommandes un voyage, inclus TOUJOURS son ID dans ce format exact : **[VOYAGE_ID:X]** (où X est le numéro)
2. Donne les détails clés : destination, prix, dates, places disponibles
3. Si aucun voyage ne correspond, dis-le honnêtement et propose des alternatives
4. Réponds TOUJOURS en français
5. Utilise des emojis pour rendre la conversation vivante
6. Sois concis : max 3-4 paragraphes par réponse
7. Si le client demande quelque chose hors sujet des voyages, ramène-le gentiment vers le sujet

## Informations sur Tahwissa :
- Agence de voyages tunisienne
- Réservation en ligne avec paiement en TND (Dinar Tunisien)
- Annulation gratuite dans les 30 premières minutes
- QR Code et facture PDF générés automatiquement pour chaque réservation
PROMPT;

        // Build OpenAI-compatible messages array
        $messages = [];

        // System instruction
        $messages[] = ['role' => 'system', 'content' => $systemInstruction];

        // Add conversation history
        $history = array_slice($conversationHistory, -10);
        foreach ($history as $msg) {
            if (isset($msg['role'], $msg['content'])) {
                $messages[] = [
                    'role' => $msg['role'] === 'assistant' ? 'assistant' : 'user',
                    'content' => $msg['content'],
                ];
            }
        }

        // Add current user message
        $messages[] = ['role' => 'user', 'content' => $userMessage];

        try {
            $response = $this->httpClient->request('POST', self::API_URL, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->openRouterApiKey,
                ],
                'json' => [
                    'model' => 'google/gemini-2.5-flash-lite',
                    'messages' => $messages,
                    'temperature' => 0.7,
                    'max_tokens' => 800,
                ],
                'timeout' => 20,
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                $rawBody = $response->getContent(false);
                $rawBody = is_string($rawBody) ? mb_substr($rawBody, 0, 300) : '';
                throw new \RuntimeException(sprintf('OpenRouter HTTP %d: %s', $statusCode, $rawBody));
            }

            $data = $response->toArray();

            if (!isset($data['choices'][0]['message']['content'])) {
                throw new \RuntimeException('Réponse IA invalide');
            }

            $reply = $data['choices'][0]['message']['content']
                ?? 'Désolé, je n\'ai pas pu traiter votre demande.';

            // Extract voyage IDs from the response
            preg_match_all('/\[VOYAGE_ID:(\d+)\]/', $reply, $matches);
            $recommendedIds = array_map('intval', $matches[1] ?? []);

            // Fetch recommended voyages from the database
            $recommendedVoyages = [];
            if (!empty($recommendedIds)) {
                $recommendedVoyages = $this->voyageRepository->findBy(['id' => $recommendedIds]);
            }

            // Clean up the reply (remove the ID tags for display)
            $cleanReply = preg_replace('/\[VOYAGE_ID:\d+\]/', '', $reply);
            $cleanReply = trim($cleanReply);

            return [
                'success' => true,
                'reply' => $cleanReply,
                'recommendedVoyages' => $recommendedVoyages,
                'tokensUsed' => 0,
            ];

        } catch (\Throwable $e) {
            $errorMsg = $e->getMessage();

            if (str_contains($errorMsg, '429')) {
                $reply = '⚠️ Limite de requêtes atteinte. Attendez quelques secondes et réessayez.';
            } elseif (str_contains($errorMsg, '401')) {
                $reply = '🔑 Clé API OpenRouter invalide ou expirée. Générez une nouvelle clé sur openrouter.ai/keys puis mettez à jour OPENROUTER_API_KEY dans .env.';
            } elseif (str_contains($errorMsg, '400')) {
                $reply = '🔑 Clé API OpenRouter invalide ou manquante. '
                    . 'Vérifiez OPENROUTER_API_KEY dans votre fichier .env.';
            } elseif (str_contains($errorMsg, '403')) {
                $reply = '🔑 Accès refusé. Vérifiez que votre clé OpenRouter est valide.';
            } else {
                $reply = '❌ Erreur de connexion au service IA. Veuillez réessayer.';
            }

            return [
                'success' => false,
                'reply' => $reply,
                'recommendedVoyages' => [],
                'tokensUsed' => 0,
            ];
        }
    }

    /**
     * Build a text catalog of available voyages for the AI context
     */
    private function buildCatalog(array $voyages): string
    {
        if (empty($voyages)) {
            return "Aucun voyage disponible actuellement.";
        }

        $lines = [];
        foreach ($voyages as $v) {
            /** @var Voyage $v */
            $lines[] = sprintf(
                "- ID:%d | %s | Destination:%s | Catégorie:%s | Prix:%s TND/pers | Dates:%s → %s | Places:%d | %s",
                $v->getId(),
                $v->getTitre(),
                $v->getDestination(),
                $v->getCategorie() ?? 'Général',
                $v->getPrixUnitaire(),
                $v->getDateDepart()?->format('d/m/Y') ?? '?',
                $v->getDateRetour()?->format('d/m/Y') ?? '?',
                $v->getPlacesDisponibles(),
                $v->getDescription() ? mb_substr($v->getDescription(), 0, 80) . '...' : ''
            );
        }

        return implode("\n", $lines);
    }
}
