<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Psr\Log\LoggerInterface;

class CurrencyService
{
    // Mock mode: set to true if internet is blocked/restricted
    private const USE_MOCK_DATA = false;
    private const BASE_TND_RATE = 1.0;

    private ?string $userCurrency = null;
    private ?string $userCountryCode = null;
    private array $exchangeRates = [];
    private HttpClientInterface $httpClient;
    private RequestStack $requestStack;
    private LoggerInterface $logger;

    public function __construct(HttpClientInterface $httpClient, RequestStack $requestStack, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->requestStack = $requestStack;
        $this->logger = $logger;
    }

    /**
     * Detect user's currency based on their location (IP geolocation)
     */
    public function detectUserCurrency(): void
    {
        // Check if already detected
        if ($this->userCurrency !== null) {
            return;
        }

        // MOCK MODE: Simulate Tunisia location
        if (self::USE_MOCK_DATA) {
            $this->logger->info('🌍 Using mock location data');
            $this->userCurrency = 'TND';
            $this->userCountryCode = 'TN';
            $this->setDefaultRates();
            $this->logger->info('✓ Simulated detection: TND (Tunisia)');
            return;
        }

        // REAL API MODE
        try {
            $userIp = $this->getUserIp();
            $this->logger->info('Detecting currency for IP: ' . $userIp);

            // Use ipinfo.io for free IP geolocation (no API key needed)
            $response = $this->httpClient->request('GET', 'https://ipinfo.io/json', [
                'timeout' => 5,
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0 (Symfony CurrencyService)',
                ]
            ]);

            if ($response->getStatusCode() === 200) {
                $data = $response->toArray();
                $this->userCountryCode = $data['country'] ?? 'TN';

                // Map country code to currency
                $this->userCurrency = $this->getCurrencyFromCountry($this->userCountryCode);

                $this->logger->info(sprintf('✓ Detected currency: %s (%s)', $this->userCurrency, $this->userCountryCode));

                // Fetch exchange rates
                $this->fetchExchangeRates();
            } else {
                $this->logger->error('IP API failed, using default currency');
                $this->setDefaultCurrency();
            }
        } catch (\Exception $e) {
            $this->logger->error('Currency detection failed: ' . $e->getMessage());
            $this->setDefaultCurrency();
        }
    }

    /**
     * Get user's IP address
     */
    private function getUserIp(): string
    {
        $request = $this->requestStack->getCurrentRequest();
        if (!$request) {
            return '0.0.0.0';
        }

        if ($request->headers->has('X-Forwarded-For')) {
            $ips = explode(',', $request->headers->get('X-Forwarded-For'));
            return trim($ips[0]);
        }

        if ($request->headers->has('X-Real-IP')) {
            return $request->headers->get('X-Real-IP');
        }

        return $request->getClientIp() ?? '0.0.0.0';
    }

    /**
     * Map country code to currency
     */
    private function getCurrencyFromCountry(string $countryCode): string
    {
        $countryToCurrency = [
            // Americas
            'US' => 'USD', 'CA' => 'CAD', 'MX' => 'MXN', 'BR' => 'BRL',
            
            // Europe
            'GB' => 'GBP', 'FR' => 'EUR', 'DE' => 'EUR', 'ES' => 'EUR',
            'IT' => 'EUR', 'NL' => 'EUR', 'BE' => 'EUR', 'PT' => 'EUR',
            'GR' => 'EUR', 'AT' => 'EUR', 'IE' => 'EUR',
            'CH' => 'CHF', 'SE' => 'SEK', 'NO' => 'NOK', 'DK' => 'DKK',
            'PL' => 'PLN', 'CZ' => 'CZK', 'HU' => 'HUF', 'RO' => 'RON',
            
            // Africa & Middle East
            'TN' => 'TND', 'MA' => 'MAD', 'DZ' => 'DZD', 'EG' => 'EGP',
            'SA' => 'SAR', 'AE' => 'AED', 'QA' => 'QAR', 'KW' => 'KWD',
            
            // Asia
            'JP' => 'JPY', 'CN' => 'CNY', 'IN' => 'INR', 'KR' => 'KRW',
            'SG' => 'SGD', 'TH' => 'THB',
            
            // Oceania
            'AU' => 'AUD', 'NZ' => 'NZD',
        ];

        return $countryToCurrency[$countryCode] ?? 'USD';
    }

    /**
     * Fetch exchange rates from TND to other currencies
     */
    private function fetchExchangeRates(): void
    {
        try {
            $this->logger->info('Fetching exchange rates from TND...');

            // Use exchangerate-api.com (free tier: 1500 requests/month)
            $response = $this->httpClient->request('GET', 'https://api.exchangerate-api.com/v4/latest/TND', [
                'timeout' => 5,
            ]);

            if ($response->getStatusCode() === 200) {
                $data = $response->toArray();
                $rates = $data['rates'] ?? [];

                // Store all exchange rates
                $this->exchangeRates = [
                    'TND' => 1.0,
                    'EUR' => $rates['EUR'] ?? 0.31,
                    'USD' => $rates['USD'] ?? 0.32,
                    'GBP' => $rates['GBP'] ?? 0.26,
                    'MAD' => $rates['MAD'] ?? 3.18,
                    'DZD' => $rates['DZD'] ?? 42.5,
                    'SAR' => $rates['SAR'] ?? 1.2,
                    'AED' => $rates['AED'] ?? 1.17,
                    'CAD' => $rates['CAD'] ?? 0.45,
                    'MXN' => $rates['MXN'] ?? 5.5,
                    'BRL' => $rates['BRL'] ?? 1.6,
                    'CHF' => $rates['CHF'] ?? 0.29,
                    'SEK' => $rates['SEK'] ?? 3.2,
                    'NOK' => $rates['NOK'] ?? 3.4,
                    'DKK' => $rates['DKK'] ?? 2.3,
                    'PLN' => $rates['PLN'] ?? 1.28,
                    'CZK' => $rates['CZK'] ?? 7.5,
                    'HUF' => $rates['HUF'] ?? 110,
                    'RON' => $rates['RON'] ?? 1.52,
                    'EGP' => $rates['EGP'] ?? 10.0,
                    'QAR' => $rates['QAR'] ?? 1.17,
                    'KWD' => $rates['KWD'] ?? 0.1,
                    'JPY' => $rates['JPY'] ?? 48.5,
                    'CNY' => $rates['CNY'] ?? 2.3,
                    'INR' => $rates['INR'] ?? 26.5,
                    'KRW' => $rates['KRW'] ?? 410,
                    'SGD' => $rates['SGD'] ?? 0.43,
                    'THB' => $rates['THB'] ?? 11.5,
                    'AUD' => $rates['AUD'] ?? 0.49,
                    'NZD' => $rates['NZD'] ?? 0.53,
                ];

                $this->logger->info(sprintf('✓ Exchange rates loaded: 1 TND = %f %s', 
                    $this->exchangeRates[$this->userCurrency] ?? 1.0, 
                    $this->userCurrency
                ));
            } else {
                $this->logger->error('Exchange rate API failed, using default rates');
                $this->setDefaultRates();
            }
        } catch (\Exception $e) {
            $this->logger->error('Failed to fetch exchange rates: ' . $e->getMessage());
            $this->setDefaultRates();
        }
    }

    /**
     * Set default currency (TND) if detection fails
     */
    private function setDefaultCurrency(): void
    {
        $this->userCurrency = 'TND';
        $this->userCountryCode = 'TN';
        $this->setDefaultRates();
        $this->logger->info('ℹ️ Using default currency: TND (Tunisia)');
    }

    /**
     * Set default exchange rates if API fails
     */
    private function setDefaultRates(): void
    {
        $this->exchangeRates = [
            'TND' => 1.0,
            'EUR' => 0.31,
            'USD' => 0.32,
            'GBP' => 0.26,
            'MAD' => 3.18,
            'DZD' => 42.5,
            'SAR' => 1.2,
            'AED' => 1.17,
            'RON' => 1.52,
            'CAD' => 0.45,
            'CHF' => 0.29,
            'JPY' => 48.5,
            'CNY' => 2.3,
            'AUD' => 0.49,
            'INR' => 26.5,
            'KRW' => 410,
        ];
    }

    /**
     * Convert price from TND to user's currency
     */
    public function convertPrice(float $priceInTND): float
    {
        if ($this->userCurrency === null) {
            $this->detectUserCurrency();
        }

        $rate = $this->exchangeRates[$this->userCurrency] ?? null;
        if ($rate === null) {
            return $priceInTND; // Return original if rate not found
        }

        return $priceInTND * $rate;
    }

    /**
     * Format price with user's currency symbol
     */
    public function formatPrice(float $priceInTND): string
    {
        $convertedPrice = $this->convertPrice($priceInTND);
        $currencySymbol = $this->getCurrencySymbol();

        return sprintf('%.2f %s', $convertedPrice, $currencySymbol);
    }

    /**
     * Get currency symbol for user's currency
     */
    public function getCurrencySymbol(): string
    {
        if ($this->userCurrency === null) {
            $this->detectUserCurrency();
        }

        return match ($this->userCurrency) {
            'EUR' => '€',
            'USD' => '$',
            'GBP' => '£',
            'JPY' => '¥',
            'CNY' => '¥',
            'INR' => '₹',
            'KRW' => '₩',
            'RON' => 'RON',
            'CHF' => 'CHF',
            'CAD' => 'C$',
            'AUD' => 'A$',
            'TND' => 'TND',
            'MAD' => 'MAD',
            'DZD' => 'DZD',
            'SAR' => 'SAR',
            'AED' => 'AED',
            default => $this->userCurrency,
        };
    }

    /**
     * Get user's currency code
     */
    public function getUserCurrency(): string
    {
        if ($this->userCurrency === null) {
            $this->detectUserCurrency();
        }
        return $this->userCurrency ?? 'TND';
    }

    /**
     * Get user's country code
     */
    public function getUserCountryCode(): string
    {
        if ($this->userCountryCode === null) {
            $this->detectUserCurrency();
        }
        return $this->userCountryCode ?? 'TN';
    }

    /**
     * Get all exchange rates
     */
    public function getExchangeRates(): array
    {
        if (empty($this->exchangeRates)) {
            $this->detectUserCurrency();
        }
        return $this->exchangeRates;
    }
}
