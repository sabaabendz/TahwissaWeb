<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenRouterGeminiService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;

    public function __construct(HttpClientInterface $httpClient, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }

    public function generateDestinationDescription(string $nom, string $pays, ?string $ville = null): string
    {
        $prompt = "Génère une description touristique attractive pour la destination suivante :\n";
        $prompt .= "Nom : $nom\n";
        $prompt .= "Pays : $pays\n";
        if ($ville) {
            $prompt .= "Ville : $ville\n";
        }
        $prompt .= "\nLa description doit être en français, professionnelle, d'environ 100-150 mots. Retourne uniquement la description.";

        return $this->callOpenRouter($prompt);
    }

    private function callOpenRouter(string $prompt): string
    {
        $response = $this->httpClient->request('POST', 'https://openrouter.ai/api/v1/chat/completions', [
            'json' => [
                'model' => 'google/gemini-1.5-flash',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt]
                ]
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ]
        ]);

        $data = $response->toArray();
        
        if (isset($data['error'])) {
            throw new \Exception($data['error']['message'] ?? 'Erreur API OpenRouter');
        }
        
        return $data['choices'][0]['message']['content'] ?? 'Description non disponible';
    }
}