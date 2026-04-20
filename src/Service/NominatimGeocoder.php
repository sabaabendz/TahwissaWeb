<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Server-side geocoding via OpenStreetMap Nominatim (required by usage policy vs. browser calls).
 *
 * @see https://operations.osmfoundation.org/policies/nominatim/
 */
final class NominatimGeocoder
{
    private const SEARCH_URL = 'https://nominatim.openstreetmap.org/search';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $appUserAgent,
        private readonly ?string $defaultCountryCodes = null,
    ) {
    }

    /**
     * @return array{latitude: float, longitude: float, display_name: string|null}|null
     */
    public function search(string $query, bool $useRegionalBias = true): ?array
    {
        $query = trim($query);
        if ($query === '') {
            return null;
        }

        $queryParams = [
            'q' => $query,
            'format' => 'json',
            'limit' => '1',
            'addressdetails' => '0',
        ];

        if ($useRegionalBias && $this->defaultCountryCodes !== null && $this->defaultCountryCodes !== '') {
            $queryParams['countrycodes'] = $this->defaultCountryCodes;
        }

        $url = self::SEARCH_URL . '?' . http_build_query($queryParams);

        try {
            $response = $this->httpClient->request('GET', $url, [
                'headers' => [
                    'User-Agent' => $this->appUserAgent,
                    'Accept' => 'application/json',
                ],
                'timeout' => 12,
            ]);

            if (200 !== $response->getStatusCode()) {
                return null;
            }

            $rows = $response->toArray();
            if (!\is_array($rows) || !isset($rows[0]['lat'], $rows[0]['lon'])) {
                return null;
            }

            $first = $rows[0];

            return [
                'latitude' => (float) $first['lat'],
                'longitude' => (float) $first['lon'],
                'display_name' => isset($first['display_name']) && \is_string($first['display_name'])
                    ? $first['display_name']
                    : null,
            ];
        } catch (\Throwable) {
            return null;
        }
    }
}
