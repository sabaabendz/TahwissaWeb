<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Fetches daily weather data from the Open-Meteo API (free, no API key required).
 *
 * Uses the forecast API for future dates (up to 16 days ahead)
 * and the archive API for past dates.
 *
 * @see https://open-meteo.com/en/docs
 */
final class OpenMeteoWeatherService
{
    private const FORECAST_URL = 'https://api.open-meteo.com/v1/forecast';
    private const ARCHIVE_URL  = 'https://archive-api.open-meteo.com/v1/archive';

    private const DAILY_VARIABLES = [
        'temperature_2m_max',
        'temperature_2m_min',
        'precipitation_sum',
        'weathercode',
        'windspeed_10m_max',
    ];

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly LoggerInterface $logger,
    ) {}

    /**
     * Returns weather data for a specific date at the given coordinates.
     *
     * @return array{
     *     date: string,
     *     tempMax: float|null,
     *     tempMin: float|null,
     *     precipitation: float,
     *     windspeed: float,
     *     weatherCode: int,
     *     description: string,
     *     icon: string,
     * }|null
     */
    public function getWeatherForDate(float $latitude, float $longitude, \DateTimeInterface $date): ?array
    {
        $today  = new \DateTimeImmutable('today');
        $target = \DateTimeImmutable::createFromInterface($date);
        $dateStr = $target->format('Y-m-d');

        // Open-Meteo forecast API covers ≈16 days ahead; older dates need the archive endpoint
        $url = ($target >= $today) ? self::FORECAST_URL : self::ARCHIVE_URL;

        try {
            $response = $this->httpClient->request('GET', $url, [
                'query' => [
                    'latitude'   => round($latitude, 4),
                    'longitude'  => round($longitude, 4),
                    'daily'      => implode(',', self::DAILY_VARIABLES),
                    'timezone'   => 'auto',
                    'start_date' => $dateStr,
                    'end_date'   => $dateStr,
                ],
                'timeout' => 8,
            ]);

            if ($response->getStatusCode() !== 200) {
                $this->logger->warning('Open-Meteo returned HTTP ' . $response->getStatusCode());

                return null;
            }

            $data  = $response->toArray();
            $daily = $data['daily'] ?? [];

            if (empty($daily['time'])) {
                return null;
            }

            $code = (int) ($daily['weathercode'][0] ?? 0);

            return [
                'date'          => $daily['time'][0],
                'tempMax'       => $daily['temperature_2m_max'][0] ?? null,
                'tempMin'       => $daily['temperature_2m_min'][0] ?? null,
                'precipitation' => (float) ($daily['precipitation_sum'][0] ?? 0),
                'windspeed'     => (float) ($daily['windspeed_10m_max'][0] ?? 0),
                'weatherCode'   => $code,
                'description'   => $this->describeWeatherCode($code),
                'icon'          => $this->iconForWeatherCode($code),
            ];
        } catch (\Throwable $e) {
            $this->logger->error('OpenMeteoWeatherService error: ' . $e->getMessage());

            return null;
        }
    }

    /**
     * Human-readable French description for a WMO weather interpretation code.
     *
     * @see https://open-meteo.com/en/docs#weathervariables
     */
    private function describeWeatherCode(int $code): string
    {
        return match (true) {
            $code === 0          => 'Ciel dégagé',
            $code === 1          => 'Principalement dégagé',
            $code === 2          => 'Partiellement nuageux',
            $code === 3          => 'Couvert',
            $code <= 48          => 'Brouillard',
            $code <= 55          => 'Bruine',
            $code <= 65          => 'Pluie',
            $code <= 67          => 'Pluie verglaçante',
            $code <= 75          => 'Neige',
            $code === 77         => 'Grésil',
            $code <= 82          => 'Averses de pluie',
            $code <= 86          => 'Averses de neige',
            $code === 95         => 'Orage',
            $code <= 99          => 'Orage avec grêle',
            default              => 'Conditions inconnues',
        };
    }

    /**
     * Font Awesome icon class for a WMO weather interpretation code.
     */
    private function iconForWeatherCode(int $code): string
    {
        return match (true) {
            $code === 0          => 'fa-sun',
            $code <= 2           => 'fa-cloud-sun',
            $code === 3          => 'fa-cloud',
            $code <= 48          => 'fa-smog',
            $code <= 55          => 'fa-cloud-rain',
            $code <= 65          => 'fa-cloud-showers-heavy',
            $code <= 67          => 'fa-icicles',
            $code <= 77          => 'fa-snowflake',
            $code <= 82          => 'fa-cloud-showers-heavy',
            $code <= 86          => 'fa-cloud-snow',
            $code <= 99          => 'fa-bolt',
            default              => 'fa-cloud',
        };
    }
}
