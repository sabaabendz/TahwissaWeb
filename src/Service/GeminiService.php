<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiService
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
        $prompt .= "\nLa description doit être en français, professionnelle, d'environ 100-150 mots. Retourne uniquement la description, sans texte supplémentaire.";

        return $this->callGemini($prompt);
    }

    private function callGemini(string $prompt): string
    {
        // Version alternative de l'API (plus stable)
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $this->apiKey;

        $response = $this->httpClient->request('POST', $url, [
            'json' => [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ],
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);

        $data = $response->toArray();
        
        // Vérification des erreurs
        if (isset($data['error'])) {
            throw new \Exception('API Error: ' . ($data['error']['message'] ?? json_encode($data['error'])));
        }
        
        if (!isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            throw new \Exception('Réponse API invalide: ' . json_encode($data));
        }
        
        return $data['candidates'][0]['content']['parts'][0]['text'];
    }
}