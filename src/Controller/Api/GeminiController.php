<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/api/gemini')]
class GeminiController extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/generate-description', name: 'api_gemini_description', methods: ['POST'])]
    public function generateDescription(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        $nom = $data['nom'] ?? null;
        $pays = $data['pays'] ?? null;
        $ville = $data['ville'] ?? null;
        
        if (!$nom || !$pays) {
            return $this->json(['error' => 'Nom et pays sont requis'], 400);
        }
        
        $prompt = "Génère une description touristique attractive pour la destination suivante :\n";
        $prompt .= "Nom : $nom\n";
        $prompt .= "Pays : $pays\n";
        if ($ville) {
            $prompt .= "Ville : $ville\n";
        }
        $prompt .= "\nLa description doit être en français, professionnelle, d'environ 100-150 mots. Retourne uniquement la description.";
        
        try {
            $response = $this->httpClient->request('POST', 'https://openrouter.ai/api/v1/chat/completions', [
                'json' => [
                    'model' => 'openrouter/auto',
                    'messages' => [['role' => 'user', 'content' => $prompt]]
                ],
                'headers' => [
                    'Authorization' => 'Bearer ' . ($_ENV['OPENROUTER_API_KEY'] ?? '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'),
                    'Content-Type' => 'application/json',
                ]
            ]);
            
            $result = $response->toArray();
            $description = $result['choices'][0]['message']['content'] ?? 'Description non disponible';
            
            return $this->json(['success' => true, 'description' => $description]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }
}