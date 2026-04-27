<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class NominatimGeocoder
{
    private HttpClientInterface $httpClient;
    private string $appUserAgent;
    private string $defaultCountryCodes;

    public function __construct(HttpClientInterface $httpClient, string $appUserAgent, string $defaultCountryCodes)
    {
        $this->httpClient = $httpClient;
        $this->appUserAgent = $appUserAgent;
        $this->defaultCountryCodes = $defaultCountryCodes;
    }

    public function geocode(string $address): ?array
    {
        return $this->search($address, false);
    }

    /**
     * Search for a location using Nominatim.
     *
     * @param string $query         The search query (address, city, etc.)
     * @param bool   $withCountryBias If true, restrict results to the configured country codes
     */
    public function search(string $query, bool $withCountryBias = false): ?array
    {
        $url = 'https://nominatim.openstreetmap.org/search';

        $queryParams = [
            'q' => $query,
            'format' => 'json',
            'limit' => 1,
            'addressdetails' => 1,
        ];

        if ($withCountryBias && $this->defaultCountryCodes) {
            $queryParams['countrycodes'] = $this->defaultCountryCodes;
        }

        $response = $this->httpClient->request('GET', $url, [
            'query' => $queryParams,
            'headers' => [
                'User-Agent' => $this->appUserAgent,
            ]
        ]);

        $data = $response->toArray();
        
        if (empty($data)) {
            return null;
        }
        
        return [
            'latitude' => (float) $data[0]['lat'],
            'longitude' => (float) $data[0]['lon'],
            'display_name' => $data[0]['display_name'],
        ];
    }
}