<?php

namespace App\Controller\Api;

use App\Service\NominatimGeocoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/geocode')]
class GeocoderController extends AbstractController
{
    private NominatimGeocoder $geocoder;

    public function __construct(NominatimGeocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    #[Route('/', name: 'api_geocode', methods: ['POST'])]
    public function geocode(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $address = $data['address'] ?? null;
        
        if (!$address) {
            return $this->json(['error' => 'Adresse requise'], 400);
        }
        
        try {
            $result = $this->geocoder->geocode($address);
            
            if (!$result) {
                return $this->json(['error' => 'Aucun résultat trouvé'], 404);
            }
            
            return $this->json(['success' => true, 'data' => $result]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }
}