<?php

namespace App\Controller\Api;

use App\Service\NominatimGeocoder;
use App\Service\OpenMeteoWeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Provides weather forecast data for event forms via AJAX.
 *
 * Combines Nominatim geocoding with the Open-Meteo forecast/archive API
 * so the frontend can query a single internal endpoint without exposing
 * third-party URLs or API keys to the browser.
 */
#[Route('/api/weather', name: 'api_weather_')]
final class WeatherController extends AbstractController
{
    public function __construct(
        private readonly NominatimGeocoder $geocoder,
        private readonly OpenMeteoWeatherService $weatherService,
    ) {}

    /**
     * GET /api/weather?lieu=Tunis&date=2026-05-15
     *
     * Query parameters:
     *   - lieu  (string, required) – event venue / city name
     *   - date  (string, required) – ISO date: YYYY-MM-DD
     *
     * Success response (200):
     *   { weather: { date, tempMax, tempMin, precipitation, windspeed, weatherCode, description, icon },
     *     location: { city, latitude, longitude } }
     *
     * Error responses: 400 (missing params), 404 (geocoding failed), 503 (Open-Meteo unavailable)
     */
    #[Route('', name: 'forecast', methods: ['GET'])]
    public function forecast(Request $request): JsonResponse
    {
        $lieu = trim((string) $request->query->get('lieu', ''));
        $date = trim((string) $request->query->get('date', ''));

        if ($lieu === '' || $date === '') {
            return $this->json(['error' => 'Les paramètres "lieu" et "date" sont requis.'], 400);
        }

        $parsedDate = \DateTimeImmutable::createFromFormat('Y-m-d', $date);
        if ($parsedDate === false) {
            return $this->json(['error' => 'Format de date invalide. Utilisez YYYY-MM-DD.'], 400);
        }

        // Geocode the venue; bias towards Tunisia (same strategy as EvenementGeolocationService)
        $coords = $this->geocoder->geocode($lieu . ', Tunisie')
                  ?? $this->geocoder->geocode($lieu);

        if ($coords === null) {
            return $this->json(['error' => 'Lieu introuvable. Vérifiez le nom de la ville ou du lieu.'], 404);
        }

        $weather = $this->weatherService->getWeatherForDate(
            $coords['latitude'],
            $coords['longitude'],
            $parsedDate,
        );

        if ($weather === null) {
            return $this->json(['error' => 'Données météo indisponibles pour cette date.'], 503);
        }

        return $this->json([
            'weather'  => $weather,
            'location' => [
                'city'      => $coords['display_name'],
                'latitude'  => $coords['latitude'],
                'longitude' => $coords['longitude'],
            ],
        ]);
    }
}
