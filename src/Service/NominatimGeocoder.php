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
        $url = 'https://nominatim.openstreetmap.org/search';
        
        $response = $this->httpClient->request('GET', $url, [
            'query' => [
                'q' => $address,
                'format' => 'json',
                'limit' => 1,
                'addressdetails' => 1,
                // 'countrycodes' => $this->defaultCountryCodes,  // Commenté pour permettre la recherche dans tous les pays
            ],
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