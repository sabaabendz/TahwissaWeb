<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class VoyageDescriptionGeneratorService
{
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $openRouterApiKey,
    ) {}

    public function isEnabled(): bool
    {
        return !empty($this->openRouterApiKey) && $this->openRouterApiKey !== 'no_key';
    }

    /**
     * Generate an attractive marketing description for a voyage.
     */
    public function generate(string $destination, ?string $categorie = null, ?string $dateDepart = null, ?string $dateRetour = null, ?string $prix = null): ?string
    {
        if (!$this->isEnabled() || trim($destination) === '') {
            return null;
        }

        $context = "Destination: {$destination}";
        if ($categorie) {
            $context .= "\nCatégorie: {$categorie}";
        }
        if ($dateDepart) {
            $context .= "\nDate départ: {$dateDepart}";
        }
        if ($dateRetour) {
            $context .= "\nDate retour: {$dateRetour}";
        }
        if ($prix) {
            $context .= "\nPrix: {$prix} TND";
        }

        $prompt = <<<PROMPT
Tu es un rédacteur marketing expert pour une agence de voyages tunisienne appelée Tahwissa.

Génère une description de voyage attractive et professionnelle en français (3-4 phrases maximum).
La description doit être:
- Engageante et donner envie de réserver
- Mentionner les points forts de la destination
- Utiliser un ton chaleureux mais professionnel
- Ne PAS inclure de prix, dates, ou informations logistiques
- Ne PAS utiliser d'emojis
- Maximum 250 caractères

Informations du voyage:
{$context}

Réponds UNIQUEMENT avec la description, sans guillemets ni préambule.
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
                    'temperature' => 0.8,
                    'max_tokens' => 300,
                ],
                'timeout' => 15,
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
