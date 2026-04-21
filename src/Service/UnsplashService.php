<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class UnsplashService
{
    private HttpClientInterface $httpClient;
    private LoggerInterface $logger;
    private string $apiKey;
    private array $imageCache = [];
    
    // Fallback images if API fails
    private const FALLBACK_IMAGES = [
        'bus' => 'https://images.unsplash.com/photo-1570125909519-76ba954eb3e7?w=600&h=400&fit=crop',
        'taxi' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600&h=400&fit=crop',
        'car' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?w=600&h=400&fit=crop',
        'van' => 'https://images.unsplash.com/photo-1464207687429-7505649dae38?w=600&h=400&fit=crop',
        'coach' => 'https://images.unsplash.com/photo-1570125909519-76ba954eb3e7?w=600&h=400&fit=crop',
        'default' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600&h=400&fit=crop',
    ];

    public function __construct(LoggerInterface $logger, ?string $unsplashApiKey = null)
    {
        $this->httpClient = HttpClient::create();
        $this->logger = $logger;
        // Use injected API key or fallback to hardcoded one
        $this->apiKey = $unsplashApiKey ?? 'ZV154MIjdGoRL1F0zMC7pmKhh-ZA-E4jrpzIvg5JUOY';
    }

    /**
     * Get image URL for transport based on destination city
     * 
     * @param string $destination Destination city name
     * @param string|null $transportType Type of transport (optional for fallback)
     * @return string Image URL
     */
    public function getTransportImageUrl(string $destination, ?string $transportType = null): string
    {
        // Check cache first
        $cacheKey = md5($destination);
        if (isset($this->imageCache[$cacheKey])) {
            return $this->imageCache[$cacheKey];
        }

        try {
            // Prepare search query - use destination city name with travel keywords
            $searchQuery = $this->prepareSearchQuery($destination);
            
            // Try to fetch from Unsplash API
            $imageUrl = $this->searchUnsplashImage($searchQuery);
            
            if ($imageUrl) {
                $this->imageCache[$cacheKey] = $imageUrl;
                $this->logger->info("Image found from Unsplash for destination: {$destination}", ['url' => $imageUrl]);
                return $imageUrl;
            }
        } catch (\Exception $e) {
            $this->logger->error("Error fetching from Unsplash API: " . $e->getMessage(), [
                'destination' => $destination,
                'type' => $transportType
            ]);
        }

        // Fallback to predefined images
        $fallbackUrl = $this->getFallbackImage($transportType);
        $this->imageCache[$cacheKey] = $fallbackUrl;
        $this->logger->info("Using fallback image for destination: {$destination}", ['url' => $fallbackUrl]);
        
        return $fallbackUrl;
    }

    /**
     * Prepare search query for better results - focus on destination
     */
    private function prepareSearchQuery(string $destination): string
    {
        // Use destination city name with travel/landscape keywords for better results
        return trim($destination) . " destination travel landscape";
    }

    /**
     * Search Unsplash API for image
     */
    private function searchUnsplashImage(string $query): ?string
    {
        try {
            $response = $this->httpClient->request('GET', 'https://api.unsplash.com/search/photos', [
                'query' => [
                    'query' => $query,
                    'client_id' => $this->apiKey,
                    'per_page' => 1,
                    'orientation' => 'landscape',
                    'order_by' => 'relevant',
                ],
                'timeout' => 3,
            ]);

            if ($response->getStatusCode() === 200) {
                $data = $response->toArray();
                
                if (isset($data['results']) && count($data['results']) > 0) {
                    $urls = $data['results'][0]['urls'];
                    // Use regular size with width parameter
                    return $urls['regular'] . '?w=600&h=400&fit=crop';
                }
            }
        } catch (\Exception $e) {
            $this->logger->warning("Unsplash API request failed: " . $e->getMessage());
        }

        return null;
    }

    /**
     * Get fallback image based on transport type
     */
    private function getFallbackImage(?string $transportType): string
    {
        if ($transportType) {
            $type = strtolower($transportType);
            if (isset(self::FALLBACK_IMAGES[$type])) {
                return self::FALLBACK_IMAGES[$type];
            }
        }

        return self::FALLBACK_IMAGES['default'];
    }

    /**
     * Clear the cache (useful for memory management)
     */
    public function clearCache(): void
    {
        $this->imageCache = [];
        $this->logger->info("Unsplash service cache cleared");
    }

    /**
     * Get cache statistics
     */
    public function getCacheStats(): array
    {
        return [
            'cached_items' => count($this->imageCache),
            'items' => $this->imageCache,
        ];
    }
}
