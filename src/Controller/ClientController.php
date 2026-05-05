<?php

namespace App\Controller;

use App\Repository\DestinationRepository;
use App\Repository\PointInteretRepository;
use App\Entity\Reclamation;
use App\Entity\ReservationEvenement;
use App\Entity\ReservationVoyage;
use App\Form\ReclamationType;
use App\Entity\VoyageReaction;
use App\Form\ReservationEvenementType;
use App\Form\ReservationVoyageType;
use App\Repository\EvenementRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationEvenementRepository;
use App\Repository\VoyageReactionRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\UnsplashService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Service\EvenementGeolocationService;
use App\Service\EvenementTicketService;
use App\Service\StripeEvenementPaymentService;
use App\Service\StripeVoyagePaymentService;
use App\Service\QRCodeService;
use App\Service\InvoiceService;
use App\Service\TravelChatbotService;
use App\Service\ReclamationAgentService;
use App\Service\TwilioSmsService;
use App\Service\EmailNotificationService;
use App\Service\WeatherService;
use App\Form\ClientProfileType;
use App\Service\AvatarUploaderHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
/**
 * CLIENT Controller - Browse voyages and manage own reservations
 */
#[Route('/client')]
class ClientController extends AbstractController
{
    #[Route('/', name: 'client_profile', methods: ['GET', 'POST'])]
    public function profile(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        AvatarUploaderHelper $avatarUploaderHelper,
    ): Response {
        $this->ensureRole($request);

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $form = $this->createForm(ClientProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $avatarFile */
            $avatarFile = $form->get('avatarFile')->getData();
            if ($avatarFile instanceof UploadedFile) {
                try {
                    $avatarPath = $avatarUploaderHelper->upload($avatarFile, (int) $user->getId());
                    $user->setAvatarUrl($avatarPath);
                } catch (\RuntimeException) {
                    $this->addFlash('warning', 'La photo de profil n\'a pas pu etre mise a jour.');
                }
            }

            $plainPassword = trim((string) $form->get('plainPassword')->getData());
            if ($plainPassword !== '') {
                $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            }

            $em->flush();
            $this->addFlash('success', 'Vos informations ont ete mises a jour avec succes.');

            return $this->redirectToRoute('client_profile');
        }

        return $this->render('client/profile/index.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }

    // ===================== VOYAGES (Read only - Catalogue) =====================

    #[Route('/voyage', name: 'client_voyage_index')]
    public function voyageIndex(VoyageRepository $voyageRepository, VoyageReactionRepository $reactionRepo, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $voyages = $search ? $voyageRepository->search($search) : $voyageRepository->findActifs();
        $reactionCounts = [];
        $userReactions = [];
    foreach ($voyages as $v) {
        $reactionCounts[$v->getId()] = $reactionRepo->getReactionCounts($v->getId());
        $r = $reactionRepo->findExistingReaction($this->getUser()->getId(), $v->getId());
        $userReactions[$v->getId()] = $r ? $r->getType() : null;
    }

        return $this->render('client/voyage/index.html.twig', [
            'voyages' => $voyages,
            'search' => $search,
            'reactionCounts' => $reactionCounts,
            'userReactions' => $userReactions,
        ]);
    }

    #[Route('/voyage/{id}', name: 'client_voyage_show', requirements: ['id' => '\d+'])]
    public function voyageShow(Request $request, \App\Entity\Voyage $voyage, WeatherService $weatherService): Response
    {
        $this->ensureRole($request);
        $weather = $weatherService->getForecast($voyage->getDestination());

        return $this->render('client/voyage/show.html.twig', [
            'voyage' => $voyage,
            'weather' => $weather,
        ]);
    }
    #[Route('/voyage/{id}/react', name: 'client_voyage_react', requirements: ['id' => '\d+'], methods: ['POST'])]
public function voyageReact(
    \App\Entity\Voyage $voyage,
    Request $request,
    VoyageReactionRepository $reactionRepo,
    EntityManagerInterface $em
): JsonResponse {
    $this->denyAccessUnlessGranted('ROLE_USER');
    $user = $this->getUser();
    $type = $request->request->get('type');

    if (!in_array($type, ['LIKE', 'DISLIKE'])) {
        return new JsonResponse(['error' => 'Type invalide'], 400);
    }

    $existing = $reactionRepo->findExistingReaction($user->getId(), $voyage->getId());

    if ($existing) {
        if ($existing->getType() === $type) {
            $em->remove($existing);
            $userReaction = null;
        } else {
            $existing->setType($type);
            $userReaction = $type;
        }
    } else {
        $reaction = (new VoyageReaction())->setUser($user)->setVoyage($voyage)->setType($type);
        $em->persist($reaction);
        $userReaction = $type;
    }

    $em->flush();
    $counts = $reactionRepo->getReactionCounts($voyage->getId());

    return new JsonResponse([
        'likes' => $counts['LIKE'],
        'dislikes' => $counts['DISLIKE'],
        'userReaction' => $userReaction,
    ]);
}

    // ===================== RESERVATIONS (Own only) =====================

    #[Route('/reservation', name: 'client_reservation_index')]
    public function reservationIndex(ReservationVoyageRepository $reservationRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        $reservations = $reservationRepository->findByUser($userId);
        $stats = $reservationRepository->getStats();

        return $this->render('client/reservation/index.html.twig', [
            'reservations' => $reservations,
            'stats' => $stats,
        ]);
    }

    #[Route('/reservation/new/{voyageId}', name: 'client_reservation_new', requirements: ['voyageId' => '\d+'], defaults: ['voyageId' => null])]
    public function reservationNew(Request $request, EntityManagerInterface $em, VoyageRepository $voyageRepository, StripeVoyagePaymentService $stripeVoyagePayment, TwilioSmsService $smsService, EmailNotificationService $emailService, ?int $voyageId = null): Response
    {
        $this->ensureRole($request);
        $reservation = new ReservationVoyage();
        $userId = $request->getSession()->get('user_id', 6);
        $reservation->setIdUtilisateur($userId);

        // Pre-select voyage if ID is provided
        if ($voyageId) {
            $voyage = $voyageRepository->find($voyageId);
            if ($voyage) {
                $reservation->setVoyage($voyage);
            }
        }

        $form = $this->createForm(ReservationVoyageType::class, $reservation, ['user_role' => 'CLIENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Validate available places
            $voyage = $reservation->getVoyage();
            if ($voyage && $reservation->getNbrPersonnes() > $voyage->getPlacesDisponibles()) {
                $this->addFlash('danger', 'Désolé, il n\'y a que ' . $voyage->getPlacesDisponibles() . ' places disponibles pour ce voyage.');
                return $this->render('client/reservation/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $reservation->setStatut('EN_ATTENTE');
            $reservation->calculerMontantTotal();

            // Décrémenter les places disponibles
            if ($voyage) {
                $voyage->setPlacesDisponibles(
                    $voyage->getPlacesDisponibles() - $reservation->getNbrPersonnes()
                );
            }

            $em->persist($reservation);
            $em->flush();

            // Determine payment method
            $modePaiement = $form->get('modePaiement')->getData();

            // Send SMS notification
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            if ($user->getPhone()) {
                $smsService->sendReservationCreated(
                    $user->getPhone(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    $voyage && $voyage->getDateDepart() ? $voyage->getDateDepart()->format('d/m/Y') : '',
                    $voyage && $voyage->getDateRetour() ? $voyage->getDateRetour()->format('d/m/Y') : '',
                    $reservation->getNbrPersonnes() ?? 1,
                    $reservation->getMontantTotal(),
                    (string) $reservation->getId(),
                );
            }

            // Send email notification
            if ($user->getEmail()) {
                $emailService->sendReservationCreated(
                    $user->getEmail(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    $voyage && $voyage->getDateDepart() ? $voyage->getDateDepart()->format('d/m/Y') : '',
                    $voyage && $voyage->getDateRetour() ? $voyage->getDateRetour()->format('d/m/Y') : '',
                    $reservation->getNbrPersonnes() ?? 1,
                    (string) ($reservation->getMontantTotal() ?? '0'),
                    (string) $reservation->getId(),
                );
            }

            // Redirect to Stripe Checkout only if client chose card payment
            if ($modePaiement === 'carte' && $stripeVoyagePayment->isEnabled() && (float) $reservation->getMontantTotal() > 0) {
                $checkoutUrl = $stripeVoyagePayment->createCheckoutSession($reservation, $request);
                if ($checkoutUrl !== null) {
                    return $this->redirect($checkoutUrl);
                }
                $this->addFlash('warning', 'Le paiement en ligne n\'a pas pu être initialisé. Votre réservation est en attente de confirmation manuelle.');
            }

            if ($modePaiement === 'especes') {
                $this->addFlash('success', 'Votre réservation a été créée avec succès ! Montant: ' . $reservation->getMontantTotal() . ' TND — Paiement en espèces sur place. Un agent confirmera votre réservation.');
            } else {
                $this->addFlash('success', 'Votre réservation a été créée avec succès ! Montant total: ' . $reservation->getMontantTotal() . ' TND');
            }
            return $this->redirectToRoute('client_reservation_index');
        }

        return $this->render('client/reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/paiement/reussi', name: 'client_reservation_voyage_payment_success')]
    public function reservationVoyagePaymentSuccess(Request $request, StripeVoyagePaymentService $stripeVoyagePayment, TwilioSmsService $smsService, EmailNotificationService $emailService): Response
    {
        $this->ensureRole($request);
        $sessionId = $request->query->get('session_id');
        if (!\is_string($sessionId) || $sessionId === '') {
            $this->addFlash('warning', 'Paiement introuvable.');
            return $this->redirectToRoute('client_reservation_index');
        }

        $userId = (int) $request->getSession()->get('user_id', 0);
        $reservation = $stripeVoyagePayment->fulfillFromCheckoutSessionId($sessionId, $userId);
        if ($reservation !== null) {
            $this->addFlash('success', 'Paiement confirmé — votre réservation de voyage est confirmée !');

            // Send SMS confirmation
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            $voyage = $reservation->getVoyage();
            if ($user && $user->getPhone()) {
                $smsService->sendReservationConfirmation(
                    $user->getPhone(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    $voyage && $voyage->getDateDepart() ? $voyage->getDateDepart()->format('d/m/Y') : '',
                    $voyage && $voyage->getDateRetour() ? $voyage->getDateRetour()->format('d/m/Y') : '',
                    $reservation->getNbrPersonnes() ?? 1,
                    $reservation->getMontantTotal(),
                    (string) $reservation->getId(),
                );
            }

            // Send email confirmation
            if ($user && $user->getEmail()) {
                $emailService->sendReservationConfirmation(
                    $user->getEmail(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    $voyage && $voyage->getDateDepart() ? $voyage->getDateDepart()->format('d/m/Y') : '',
                    $voyage && $voyage->getDateRetour() ? $voyage->getDateRetour()->format('d/m/Y') : '',
                    $reservation->getNbrPersonnes() ?? 1,
                    (string) ($reservation->getMontantTotal() ?? '0'),
                    (string) $reservation->getId(),
                );
            }
        } else {
            $this->addFlash('info', 'Si le paiement vient d\'être effectué, la confirmation peut prendre quelques secondes.');
        }

        return $this->redirectToRoute('client_reservation_index');
    }

    #[Route('/reservation/paiement/annule/{id}', name: 'client_reservation_voyage_payment_cancel', requirements: ['id' => '\d+'])]
    public function reservationVoyagePaymentCancel(Request $request, ReservationVoyage $reservation, EntityManagerInterface $em, TwilioSmsService $smsService, EmailNotificationService $emailService): Response
    {
        $this->ensureRole($request);
        $userId = (int) $request->getSession()->get('user_id', 0);
        if ($reservation->getIdUtilisateur() !== $userId) {
            $this->addFlash('danger', 'Accès refusé.');
            return $this->redirectToRoute('client_reservation_index');
        }

        if ('EN_ATTENTE' === $reservation->getStatut()) {
            $reservation->setStatut('ANNULEE');
            $voyage = $reservation->getVoyage();
            if ($voyage) {
                $voyage->setPlacesDisponibles($voyage->getPlacesDisponibles() + $reservation->getNbrPersonnes());
            }
            $em->flush();

            // Send SMS cancellation
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            if ($user && $user->getPhone()) {
                $smsService->sendReservationCancellation(
                    $user->getPhone(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    $reservation->getMontantTotal(),
                    (string) $reservation->getId(),
                );
            }

            // Send email cancellation
            if ($user && $user->getEmail()) {
                $emailService->sendReservationCancellation(
                    $user->getEmail(),
                    $user->getName(),
                    $voyage ? $voyage->getTitre() : 'Voyage',
                    $voyage ? $voyage->getDestination() : '',
                    (string) ($reservation->getMontantTotal() ?? '0'),
                    (string) $reservation->getId(),
                );
            }
        }

        $this->addFlash('warning', 'Paiement annulé. Aucun montant n\'a été débité.');
        return $this->redirectToRoute('client_reservation_index');
    }

    #[Route('/reservation/{id}', name: 'client_reservation_show', requirements: ['id' => '\d+'])]
    public function reservationShow(Request $request, ReservationVoyage $reservation): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUtilisateur() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_index');
        }

        return $this->render('client/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/cancel', name: 'client_reservation_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reservationCancel(Request $request, ReservationVoyage $reservation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUtilisateur() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_index');
        }

        if ($this->isCsrfTokenValid('cancel' . $reservation->getId(), $request->request->get('_token'))) {
            if ($reservation->getStatut() === 'EN_ATTENTE') {
                $reservation->setStatut('ANNULEE');

                // Remettre les places en stock
                $voyage = $reservation->getVoyage();
                if ($voyage) {
                    $voyage->setPlacesDisponibles(
                        $voyage->getPlacesDisponibles() + $reservation->getNbrPersonnes()
                    );
                }

                $em->flush();
                $this->addFlash('success', 'Votre réservation a été annulée.');
            } else {
                $this->addFlash('warning', 'Seules les réservations en attente peuvent être annulées.');
            }
        }

        return $this->redirectToRoute('client_reservation_index');
    }

    // ===================== QR CODE & FACTURE =====================

    #[Route('/reservation/{id}/qrcode', name: 'client_reservation_qrcode', requirements: ['id' => '\d+'])]
    public function reservationQrCode(Request $request, ReservationVoyage $reservation, QRCodeService $qrCodeService): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUtilisateur() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_index');
        }

        return $this->render('client/reservation/qrcode.html.twig', [
            'reservation' => $reservation,
            'qrCode'      => $qrCodeService->generateForReservation($reservation),
            'qrExtension' => extension_loaded('gd') ? 'png' : 'svg',
        ]);
    }

    #[Route('/reservation/{id}/invoice', name: 'client_reservation_invoice', requirements: ['id' => '\d+'])]
    public function reservationInvoice(Request $request, ReservationVoyage $reservation, InvoiceService $invoiceService): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUtilisateur() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_index');
        }

        $pdfContent = $invoiceService->generatePdf($reservation);

        return new Response($pdfContent, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="facture-reservation-' . $reservation->getId() . '.pdf"',
        ]);
    }

    // ===================== CHATBOT IA =====================

    #[Route('/chatbot', name: 'client_chatbot_send', methods: ['POST'])]
    public function chatbotSend(Request $request, TravelChatbotService $chatbotService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = trim($data['message'] ?? '');
        $history = $data['history'] ?? [];

        if (empty($message)) {
            return new JsonResponse(['success' => false, 'reply' => 'Message vide.'], 400);
        }

        $result = $chatbotService->chat($message, $history);

        // Serialize recommended voyages for JSON
        $voyagesData = [];
        foreach ($result['recommendedVoyages'] as $v) {
            $voyagesData[] = [
                'id' => $v->getId(),
                'titre' => $v->getTitre(),
                'destination' => $v->getDestination(),
                'prix' => $v->getPrixUnitaire(),
                'dateDepart' => $v->getDateDepart()?->format('d/m/Y'),
                'dateRetour' => $v->getDateRetour()?->format('d/m/Y'),
                'places' => $v->getPlacesDisponibles(),
                'imageUrl' => $v->getImageUrl(),
            ];
        }

        return new JsonResponse([
            'success' => $result['success'],
            'reply' => $result['reply'],
            'voyages' => $voyagesData,
        ]);
    }

    // ===================== EVENEMENTS (Catalogue) =====================

    #[Route('/evenement', name: 'client_evenement_index')]
    public function evenementIndex(EvenementRepository $evenementRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $evenements = $search
            ? $evenementRepository->search($search)
            : $evenementRepository->findUpcoming();

        return $this->render('client/evenement/index.html.twig', [
            'evenements' => $evenements,
            'search'     => $search,
        ]);
    }

    #[Route('/evenement/{id}', name: 'client_evenement_show', requirements: ['id' => '\d+'])]
    public function evenementShow(
        Request $request,
        \App\Entity\Evenement $evenement,
        EvenementGeolocationService $evenementGeolocation,
        EntityManagerInterface $em,
    ): Response {
        $this->ensureRole($request);
        if (!$evenement->hasMapCoordinates()) {
            $evenementGeolocation->resolveAndApply($evenement);
            $em->flush();
        }

        return $this->render('client/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    // ===================== RESERVATION EVENEMENT (Own only) =====================

    #[Route('/reservation-evenement', name: 'client_reservation_evenement_index')]
    public function reservationEvenementIndex(ReservationEvenementRepository $repo, Request $request): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        $reservations = $repo->findByUser($userId);

        return $this->render('client/reservation_evenement/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/reservation-evenement/new/{evenementId}', name: 'client_reservation_evenement_new', requirements: ['evenementId' => '\d+'], defaults: ['evenementId' => null])]
    public function reservationEvenementNew(
        Request $request,
        EntityManagerInterface $em,
        EvenementRepository $evenementRepository,
        StripeEvenementPaymentService $stripeEvenementPayment,
        ?int $evenementId = null,
    ): Response {
        $this->ensureRole($request);
        $reservation = new ReservationEvenement();
        $userId = $request->getSession()->get('user_id', 6);
        $reservation->setIdUser($userId);

        if ($evenementId) {
            $evenement = $evenementRepository->find($evenementId);
            if ($evenement) {
                $reservation->setEvenement($evenement);
            }
        }

        $form = $this->createForm(ReservationEvenementType::class, $reservation, ['user_role' => 'CLIENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenement = $reservation->getEvenement();
            if (!$evenement) {
                $this->addFlash('danger', 'Veuillez sélectionner un événement.');
                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            if ($reservation->getNbPlacesReservees() > $evenement->getNbPlaces()) {
                $this->addFlash('danger', 'Désolé, il n\'y a que ' . $evenement->getNbPlaces() . ' places disponibles pour cet événement.');
                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            if ('DISPONIBLE' !== $evenement->getStatut() || $evenement->getNbPlaces() < 1) {
                $this->addFlash('danger', 'Cet événement n\'est plus disponible à la réservation.');
                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $totalTnd = $stripeEvenementPayment->computeTotalTnd($reservation);

            $reservation->setStatut('EN_ATTENTE');
            $em->persist($reservation);

            if ($totalTnd <= 0) {
                if (!$stripeEvenementPayment->finalizeFreeReservation($reservation)) {
                    $em->remove($reservation);
                    $em->flush();
                    $this->addFlash('danger', 'Impossible de finaliser la réservation gratuite (places insuffisantes).');

                    return $this->render('client/reservation_evenement/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
                $this->addFlash('success', 'Réservation gratuite confirmée !');
                return $this->redirectToRoute('client_reservation_evenement_index');
            }

            if (!$stripeEvenementPayment->isEnabled()) {
                $this->addFlash('danger', 'Le paiement en ligne n\'est pas configuré. Contactez l\'administrateur (Stripe).');

                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            if (!$stripeEvenementPayment->reserveHeldSeats($reservation)) {
                $em->remove($reservation);
                $em->flush();
                $this->addFlash('danger', 'Plus assez de places disponibles pour cet événement.');

                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $checkoutUrl = $stripeEvenementPayment->createCheckoutSession($reservation, $request);
            if (null === $checkoutUrl) {
                $stripeEvenementPayment->releaseHeldSeats($reservation);
                $em->remove($reservation);
                $em->flush();

                $errorMsg = 'Impossible de démarrer le paiement Stripe. Réessayez plus tard.';
                if ($_ENV['APP_ENV'] === 'dev' && $stripeEvenementPayment->getLastStripeError()) {
                    $errorMsg .= ' [DEV] ' . $stripeEvenementPayment->getLastStripeError();
                }
                $this->addFlash('danger', $errorMsg);

                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            return $this->redirect($checkoutUrl);
        }

        return $this->render('client/reservation_evenement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation-evenement/paiement/reussi', name: 'client_reservation_evenement_payment_success')]
    public function reservationEvenementPaymentSuccess(
        Request $request,
        StripeEvenementPaymentService $stripeEvenementPayment,
        ReservationEvenementRepository $reservationEvenementRepo,
    ): Response {
        $this->ensureRole($request);
        $sessionId = $request->query->get('session_id');
        if (!\is_string($sessionId) || $sessionId === '') {
            $this->addFlash('warning', 'Paiement introuvable.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        $userId    = (int) $request->getSession()->get('user_id', 0);
        $fulfilled = $stripeEvenementPayment->fulfillFromCheckoutSessionId($sessionId, $userId);

        if ($fulfilled) {
            // Redirect directly to the ticket PDF download — the user paid, give them their ticket immediately.
            $reservation = $reservationEvenementRepo->findOneBy(['stripeCheckoutSessionId' => $sessionId]);
            if ($reservation instanceof ReservationEvenement && $reservation->getStatut() === 'CONFIRMEE') {
                $this->addFlash('success', 'Paiement confirmé ! Votre billet est en cours de téléchargement.');
                return $this->redirectToRoute('client_reservation_evenement_ticket', ['id' => $reservation->getId()]);
            }
            $this->addFlash('success', 'Paiement confirmé — votre réservation est enregistrée.');
        } else {
            $this->addFlash('info', 'Si le paiement vient d\'être effectué, la confirmation peut prendre quelques secondes. Vérifiez vos réservations.');
        }

        return $this->redirectToRoute('client_reservation_evenement_index');
    }

    #[Route('/reservation-evenement/{id}/ticket', name: 'client_reservation_evenement_ticket', requirements: ['id' => '\d+'])]
    public function reservationEvenementTicket(
        Request $request,
        ReservationEvenement $reservation,
        EvenementTicketService $ticketService,
    ): Response {
        $this->ensureRole($request);
        $userId = (int) $request->getSession()->get('user_id', 0);

        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Accès refusé.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        if ($reservation->getStatut() !== 'CONFIRMEE') {
            $this->addFlash('warning', 'Le billet n\'est disponible que pour les réservations confirmées.');
            return $this->redirectToRoute('client_reservation_evenement_show', ['id' => $reservation->getId()]);
        }

        $pdf      = $ticketService->generatePdf($reservation);
        $filename = $ticketService->buildFilename($reservation);

        return new Response($pdf, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control'       => 'private, no-store',
        ]);
    }

    #[Route('/reservation-evenement/paiement/annule/{id}', name: 'client_reservation_evenement_payment_cancel', requirements: ['id' => '\d+'])]
    public function reservationEvenementPaymentCancel(
        Request $request,
        ReservationEvenement $reservation,
        StripeEvenementPaymentService $stripeEvenementPayment,
    ): Response {
        $this->ensureRole($request);
        $userId = (int) $request->getSession()->get('user_id', 0);
        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Accès refusé.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        if ('EN_ATTENTE' === $reservation->getStatut()) {
            $stripeEvenementPayment->abandonPendingReservation($reservation);
        }

        $this->addFlash('warning', 'Paiement annulé. Aucun montant n\'a été débité.');
        return $this->redirectToRoute('client_evenement_index');
    }

    #[Route('/reservation-evenement/{id}', name: 'client_reservation_evenement_show', requirements: ['id' => '\d+'])]
    public function reservationEvenementShow(Request $request, ReservationEvenement $reservation): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        return $this->render('client/reservation_evenement/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation-evenement/{id}/cancel', name: 'client_reservation_evenement_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reservationEvenementCancel(
        Request $request,
        ReservationEvenement $reservation,
        EntityManagerInterface $em,
        StripeEvenementPaymentService $stripeEvenementPayment,
    ): Response {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        if ($this->isCsrfTokenValid('cancel' . $reservation->getId(), $request->request->get('_token'))) {
            if ($reservation->getStatut() === 'EN_ATTENTE') {
                $stripeEvenementPayment->abandonPendingReservation($reservation);
                $this->addFlash('success', 'Votre réservation a été annulée.');
            } else {
                $this->addFlash('warning', 'Seules les réservations en attente peuvent être annulées.');
            }
        }

        return $this->redirectToRoute('client_reservation_evenement_index');
    }
 // ===================== TRANSPORT (Catalogue) =====================

    #[Route('/transport', name: 'client_transport_index')]
    public function transportIndex(\App\Repository\TransportRepository $transportRepository, Request $request, PaginatorInterface $paginator, UnsplashService $unsplashService): Response
    {
        $this->ensureRole($request);
        $query = $transportRepository->createQueryBuilder('t')->getQuery();
        $transports = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
        
        // Add images for each transport
        $transportImages = [];
        foreach ($transports->getItems() as $transport) {
            $transportImages[$transport->getIdTransport()] = $unsplashService->getTransportImageUrl(
                $transport->getVilleArrivee() ?? 'destination',
                $transport->getTypeTransport() ?? 'bus'
            );
        }
        
        return $this->render('client/transport/index.html.twig', [
            'transports' => $transports,
            'transportImages' => $transportImages,
        ]);
    }

    // ===================== RESERVATION TRANSPORT (Own only) =====================

    #[Route('/reservation-transport', name: 'client_reservation_transport_index')]
    public function reservationTransportIndex(\App\Repository\ReservationTransportRepository $repo, Request $request): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        $reservations = $repo->findBy(['idUser' => $userId]);

        return $this->render('client/reservation_transport/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/reservation-transport/new/{transportId}', name: 'client_reservation_transport_new', requirements: ['transportId' => '\d+'], defaults: ['transportId' => null])]
    public function reservationTransportNew(Request $request, EntityManagerInterface $em, \App\Repository\TransportRepository $transportRepository, ?int $transportId = null): Response
    {
        $this->ensureRole($request);
        $reservation = new \App\Entity\ReservationTransport();
        $userId = $request->getSession()->get('user_id', 6);
        $reservation->setIdUser($userId);
        $reservation->setStatut('EN_ATTENTE');

        if ($transportId) {
            $transport = $transportRepository->find($transportId);
            if ($transport) {
                $reservation->setTransport($transport);
            }
        }

        $form = $this->createForm(\App\Form\ReservationTransportType::class, $reservation, ['user_role' => 'CLIENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transport = $reservation->getTransport();
            if ($transport && $reservation->getNbPlacesReservees() > $transport->getNbPlaces()) {
                $this->addFlash('danger', 'Désolé, il n\'y a que ' . $transport->getNbPlaces() . ' places disponibles.');
                return $this->render('client/reservation_transport/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Votre réservation a été créée avec succès !');
            return $this->redirectToRoute('client_reservation_transport_index');
        }

        return $this->render('client/reservation_transport/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation-transport/{id}/cancel', name: 'client_reservation_transport_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reservationTransportCancel(Request $request, \App\Entity\ReservationTransport $reservation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_transport_index');
        }

        if ($this->isCsrfTokenValid('cancel' . $reservation->getIdReservation(), $request->request->get('_token'))) {
            if ($reservation->getStatut() === 'EN_ATTENTE') {
                $reservation->setStatut('ANNULEE');
                $em->flush();
                $this->addFlash('success', 'Votre réservation a été annulée.');
            } else {
                $this->addFlash('warning', 'Seules les réservations en attente peuvent être annulées.');
            }
        }

        return $this->redirectToRoute('client_reservation_transport_index');
    }


    // ===================== RECLAMATION (Own only) =====================

    #[Route('/reclamation', name: 'client_reclamation_index')]
    public function reclamationIndex(ReclamationRepository $reclamationRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        $reclamations = $reclamationRepository->findByUser($userId);

        return $this->render('client/reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/reclamation/new', name: 'client_reclamation_new')]
    public function reclamationNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $reclamation = new Reclamation();
        $userId = $request->getSession()->get('user_id', 6);
        $reclamation->setIdUser($userId);

        $form = $this->createForm(ReclamationType::class, $reclamation, ['user_role' => 'CLIENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reclamation);
            $em->flush();
            $this->addFlash('success', 'Votre réclamation a été soumise avec succès !');
            return $this->redirectToRoute('client_reclamation_index');
        }

        return $this->render('client/reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reclamation/{id}', name: 'client_reclamation_show', requirements: ['id' => '\d+'])]
    public function reclamationShow(Request $request, Reclamation $reclamation): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reclamation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réclamation.');
            return $this->redirectToRoute('client_reclamation_index');
        }

        return $this->render('client/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/reclamation/{id}/delete', name: 'client_reclamation_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reclamationDelete(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reclamation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réclamation.');
            return $this->redirectToRoute('client_reclamation_index');
        }

        if ($this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->request->get('_token'))) {
            if ($reclamation->getStatut() === 'EN_ATTENTE') {
                $em->remove($reclamation);
                $em->flush();
                $this->addFlash('success', 'Réclamation supprimée.');
            } else {
                $this->addFlash('warning', 'Seules les réclamations en attente peuvent être supprimées.');
            }
        }

        return $this->redirectToRoute('client_reclamation_index');
    }

    #[Route('/reclamation/{id}/agent', name: 'client_reclamation_agent_chat', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function reclamationAgentChat(Request $request, Reclamation $reclamation, ReclamationAgentService $agentService): JsonResponse
    {
        $this->ensureRole($request);
        $userId = (int) $request->getSession()->get('user_id', 0);

        // Verify ownership
        if ($reclamation->getIdUser() !== $userId) {
            return new JsonResponse(['success' => false, 'reply' => 'Accès refusé.'], 403);
        }

        $data    = json_decode($request->getContent(), true);
        $message = trim($data['message'] ?? '');
        $history = $data['history'] ?? [];

        if (empty($message)) {
            return new JsonResponse(['success' => false, 'reply' => 'Message vide.'], 400);
        }

        $result = $agentService->chat($reclamation, $message, $history, $userId);

        return new JsonResponse([
            'success'   => $result['success'],
            'reply'     => $result['reply'],
            'escalated' => $result['escalated'],
        ]);
    }

    private function ensureRole(Request $request): void
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $session = $request->getSession();
        $session->set('user_role', 'CLIENT');
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getName());
    }
    // ===================== DESTINATIONS (Client) =====================

#[Route('/destinations', name: 'client_destination_index')]
public function destinationsIndex(DestinationRepository $repository, Request $request): Response
{
    $this->ensureRole($request);
    $search = $request->query->get('search', '');
    
    if ($search) {
        $destinations = $repository->createQueryBuilder('d')
            ->where('d.nom LIKE :search')
            ->orWhere('d.pays LIKE :search')
            ->setParameter('search', '%' . $search . '%')
            ->orderBy('d.nom', 'ASC')
            ->getQuery()
            ->getResult();
    } else {
        $destinations = $repository->findBy([], ['nom' => 'ASC']);
    }
    
    return $this->render('client/destination/index.html.twig', [
        'destinations' => $destinations,
        'search' => $search,
    ]);
}

#[Route('/destination/{id}', name: 'client_destination_show', requirements: ['id' => '\d+'])]
public function destinationShow(Request $request, int $id, DestinationRepository $repository): Response
{
    $this->ensureRole($request);
    $destination = $repository->find($id);
    
    if (!$destination) {
        throw $this->createNotFoundException('Destination non trouvée');
    }
    
    return $this->render('client/destination/show.html.twig', [
        'destination' => $destination,
    ]);
}

// ===================== POINTS D'INTÉRÊT (Client) =====================

#[Route('/points-interet', name: 'client_pointinteret_index')]
public function pointsInteretIndex(PointInteretRepository $repository, Request $request): Response
{
    $this->ensureRole($request);
    $typeFilter = $request->query->get('type', '');
    $search = $request->query->get('search', '');
    
    $qb = $repository->createQueryBuilder('p')
        ->leftJoin('p.destination', 'd')
        ->addSelect('d');
    
    if ($search) {
        $qb->andWhere('p.nom LIKE :search OR d.nom LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }
    
    if ($typeFilter) {
        $qb->andWhere('p.type = :type')
           ->setParameter('type', $typeFilter);
    }
    
    $pointsInteret = $qb->orderBy('p.nom', 'ASC')->getQuery()->getResult();
    
    // Statistiques par type
    $allPoints = $repository->findAll();
    $stats = [];
    foreach ($allPoints as $point) {
        $type = $point->getType();
        if (!isset($stats[$type])) $stats[$type] = 0;
        $stats[$type]++;
    }
    
    return $this->render('client/pointinteret/index.html.twig', [
        'pointsInteret' => $pointsInteret,
        'stats' => $stats,
        'currentType' => $typeFilter,
        'search' => $search,
    ]);
}

#[Route('/point-interet/{id}', name: 'client_pointinteret_show', requirements: ['id' => '\d+'])]
public function pointInteretShow(Request $request, int $id, PointInteretRepository $repository): Response
{
    $this->ensureRole($request);
    $pointInteret = $repository->find($id);
    
    if (!$pointInteret) {
        throw $this->createNotFoundException('Point d\'intérêt non trouvé');
    }
    
    return $this->render('client/pointinteret/show.html.twig', [
        'pointInteret' => $pointInteret,
    ]);
}
}
