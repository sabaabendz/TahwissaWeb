<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    private const API_URL = 'https://api.openweathermap.org/data/2.5/forecast';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $apiKey,
        private ?\Psr\Log\LoggerInterface $logger = null,
    ) {}

    public function isEnabled(): bool
    {
        return !empty($this->apiKey) && $this->apiKey !== 'no_key';
    }

    /**
     * Get 5-day weather forecast for a destination.
     * Returns null on failure.
     *
     * @return array{city: string, forecasts: list<array{date: string, temp: float, tempMin: float, tempMax: float, description: string, icon: string, humidity: int, wind: float}>}|null
     */
    public function getForecast(string $destination): ?array
    {
        if (!$this->isEnabled() || trim($destination) === '') {
            return null;
        }

        try {
            $response = $this->httpClient->request('GET', self::API_URL, [
                'query' => [
                    'q' => $destination,
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                    'lang' => 'fr',
                    'cnt' => 40, // 5 days × 8 intervals (every 3h)
                ],
                'timeout' => 8,
            ]);

            if ($response->getStatusCode() !== 200) {
                return null;
            }

            $data = $response->toArray();
            $city = $data['city']['name'] ?? $destination;

            // Group by day and pick the noon forecast (or closest)
            $dailyForecasts = [];
            foreach ($data['list'] ?? [] as $item) {
                $date = date('Y-m-d', $item['dt']);
                $hour = (int) date('H', $item['dt']);

                // Prefer the 12:00 forecast for each day
                if (!isset($dailyForecasts[$date]) || abs($hour - 12) < abs($dailyForecasts[$date]['_hour'] - 12)) {
                    $dailyForecasts[$date] = [
                        '_hour' => $hour,
                        'date' => $date,
                        'temp' => round($item['main']['temp']),
                        'tempMin' => round($item['main']['temp_min']),
                        'tempMax' => round($item['main']['temp_max']),
                        'description' => ucfirst($item['weather'][0]['description'] ?? ''),
                        'icon' => $item['weather'][0]['icon'] ?? '01d',
                        'humidity' => $item['main']['humidity'] ?? 0,
                        'wind' => round($item['wind']['speed'] ?? 0, 1),
                    ];
                }
            }

            // Remove internal _hour key and limit to 5 days
            $forecasts = array_values(array_map(function ($f) {
                unset($f['_hour']);
                return $f;
            }, array_slice($dailyForecasts, 0, 5)));

            return [
                'city' => $city,
                'forecasts' => $forecasts,
            ];
        } catch (\Throwable $e) {
            $this->logger?->error('WeatherService error: ' . $e->getMessage());
            return null;
        }
    }
}
