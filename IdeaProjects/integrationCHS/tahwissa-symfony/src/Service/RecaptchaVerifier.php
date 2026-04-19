<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RecaptchaVerifier
{
    private string $secretKey;
    private HttpClientInterface $httpClient;

    public function __construct(string $secretKey, HttpClientInterface $httpClient)
    {
        $this->secretKey = $secretKey;
        $this->httpClient = $httpClient;
    }

    /**
     * Whether reCAPTCHA verification is enabled (a real secret key is configured).
     */
    public function isEnabled(): bool
    {
        return !empty($this->secretKey) && $this->secretKey !== 'no_secret';
    }

    /**
     * Verify a reCAPTCHA response token with Google's API.
     * Returns true automatically if not enabled.
     */
    public function verify(?string $responseToken, ?string $remoteIp = null): bool
    {
        if (!$this->isEnabled()) {
            return true;
        }

        if (empty($responseToken)) {
            return false;
        }

        $params = [
            'secret' => $this->secretKey,
            'response' => $responseToken,
        ];

        if ($remoteIp) {
            $params['remoteip'] = $remoteIp;
        }

        try {
            $response = $this->httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => $params,
            ]);

            $data = $response->toArray(false);

            return !empty($data['success']);
        } catch (\Throwable) {
            return false;
        }
    }
}
