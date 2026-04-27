<?php

namespace App\EventListener;

use App\Service\CurrencyService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class CurrencyDetectionListener implements EventSubscriberInterface
{
    private CurrencyService $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 100], // High priority to detect early
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        // Only detect on main requests, not sub-requests
        if (!$event->isMainRequest()) {
            return;
        }

        // Skip for API requests if needed (optional)
        // if (strpos($event->getRequest()->getPathInfo(), '/api/') === 0) {
        //     return;
        // }

        // Detect currency based on user's IP
        $this->currencyService->detectUserCurrency();
    }
}
