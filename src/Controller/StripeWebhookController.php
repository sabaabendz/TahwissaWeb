<?php

namespace App\Controller;

use App\Service\StripeEvenementPaymentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class StripeWebhookController extends AbstractController
{
    #[Route('/stripe/webhook', name: 'stripe_webhook', methods: ['POST'])]
    public function __invoke(Request $request, StripeEvenementPaymentService $stripeEvenementPayment): Response
    {
        $payload = $request->getContent();
        $sig = (string) $request->headers->get('Stripe-Signature', '');

        if (!$stripeEvenementPayment->handleStripeWebhookPayload($payload, $sig)) {
            return new Response('Invalid payload or signature', 400);
        }

        return new Response('OK', 200);
    }
}
