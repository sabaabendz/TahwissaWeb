<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\ReservationEvenement;
use App\Entity\ReservationVoyage;
use App\Entity\Voyage;
use App\Form\EvenementType;
use App\Form\ReservationEvenementType;
use App\Form\ReservationVoyageType;
use App\Form\VoyageType;
use App\Repository\EvenementRepository;
use App\Repository\ReservationEvenementRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\UserRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\VoyageRepository;
use App\Service\EvenementGeolocationService;
use App\Service\InvoiceService;
use App\Service\QRCodeService;
use App\Service\TwilioSmsService;
use App\Service\EmailNotificationService;
use App\Service\VoyageDescriptionGeneratorService;
use App\Service\VoyageInsightsService;
use App\Service\WeatherService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * AGENT Controller - Can manage voyages (no delete) and reservations (update status)
 */
#[Route('/agent')]
class AgentController extends AbstractController
{
    // ===================== VOYAGE =====================

    #[Route('/voyage', name: 'agent_voyage_index')]
    public function voyageIndex(VoyageRepository $voyageRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $voyages = $search ? $voyageRepository->search($search) : $voyageRepository->findBy([], ['createdAt' => 'DESC']);
        $stats = $voyageRepository->getStats();

        return $this->render('agent/voyage/index.html.twig', [
            'voyages' => $voyages,
            'stats' => $stats,
            'search' => $search,
        ]);
    }

    #[Route('/voyage/new', name: 'agent_voyage_new')]
    public function voyageNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($voyage);
            $em->flush();
            $this->addFlash('success', 'Voyage créé avec succès !');
            return $this->redirectToRoute('agent_voyage_index');
        }

        return $this->render('agent/voyage/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/voyage/{id}', name: 'agent_voyage_show', requirements: ['id' => '\d+'])]
    public function voyageShow(Request $request, Voyage $voyage, WeatherService $weatherService): Response
    {
        $this->ensureRole($request);
        $weather = $weatherService->getForecast($voyage->getDestination());

        return $this->render('agent/voyage/show.html.twig', [
            'voyage' => $voyage,
            'weather' => $weather,
        ]);
    }

    #[Route('/voyage/{id}/edit', name: 'agent_voyage_edit', requirements: ['id' => '\d+'])]
    public function voyageEdit(Request $request, Voyage $voyage, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $voyage->setUpdatedAt(new \DateTime());
            $em->flush();
            $this->addFlash('success', 'Voyage modifié avec succès !');
            return $this->redirectToRoute('agent_voyage_index');
        }

        return $this->render('agent/voyage/edit.html.twig', [
            'form' => $form->createView(),
            'voyage' => $voyage,
        ]);
    }

    // ===================== RESERVATION =====================

    #[Route('/reservation', name: 'agent_reservation_index')]
    public function reservationIndex(ReservationVoyageRepository $reservationRepository, UserRepository $userRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut', '');

        if ($search || $statut) {
            $reservations = $reservationRepository->search($search, $statut ?: null);
        } else {
            $reservations = $reservationRepository->findAllWithVoyage();
        }
        $stats = $reservationRepository->getStats();

        return $this->render('agent/reservation/index.html.twig', [
            'reservations' => $reservations,
            'stats' => $stats,
            'search' => $search,
            'currentStatut' => $statut,
            'usersById' => $userRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation/new', name: 'agent_reservation_new')]
    public function reservationNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $reservation = new ReservationVoyage();
        $reservation->setIdUtilisateur($request->getSession()->get('user_id', 2));
        $form = $this->createForm(ReservationVoyageType::class, $reservation, ['user_role' => 'AGENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->calculerMontantTotal();

            // Décrémenter les places disponibles
            $voyage = $reservation->getVoyage();
            if ($voyage && $reservation->getNbrPersonnes() <= $voyage->getPlacesDisponibles()) {
                $voyage->setPlacesDisponibles(
                    $voyage->getPlacesDisponibles() - $reservation->getNbrPersonnes()
                );
            }

            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation créée avec succès !');
            return $this->redirectToRoute('agent_reservation_index');
        }

        return $this->render('agent/reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/{id}', name: 'agent_reservation_show', requirements: ['id' => '\d+'])]
    public function reservationShow(Request $request, ReservationVoyage $reservation, UserRepository $userRepository): Response
    {
        $this->ensureRole($request);
        return $this->render('agent/reservation/show.html.twig', [
            'reservation' => $reservation,
            'usersById' => $userRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'agent_reservation_edit', requirements: ['id' => '\d+'])]
    public function reservationEdit(Request $request, ReservationVoyage $reservation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $form = $this->createForm(ReservationVoyageType::class, $reservation, ['user_role' => 'AGENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->calculerMontantTotal();
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès !');
            return $this->redirectToRoute('agent_reservation_index');
        }

        return $this->render('agent/reservation/edit.html.twig', [
            'form' => $form->createView(),
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/status/{statut}', name: 'agent_reservation_status', requirements: ['id' => '\d+'])]
    public function reservationStatus(Request $request, ReservationVoyage $reservation, string $statut, EntityManagerInterface $em, TwilioSmsService $smsService, EmailNotificationService $emailService): Response
    {
        $this->ensureRole($request);
        $validStatuts = ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE', 'TERMINEE'];
        if (in_array($statut, $validStatuts)) {
            $oldStatut = $reservation->getStatut();

            // Remettre les places en stock si on passe à ANNULEE depuis un statut actif
            if ($statut === 'ANNULEE' && in_array($oldStatut, ['EN_ATTENTE', 'CONFIRMEE'])) {
                $voyage = $reservation->getVoyage();
                if ($voyage) {
                    $voyage->setPlacesDisponibles(
                        $voyage->getPlacesDisponibles() + $reservation->getNbrPersonnes()
                    );
                }
            }

            $reservation->setStatut($statut);
            $em->flush();

            // Send SMS notification to client
            $user = $em->getRepository(\App\Entity\User::class)->find($reservation->getIdUtilisateur());
            if ($user && $user->getPhone()) {
                $voyage = $reservation->getVoyage();
                if ($statut === 'CONFIRMEE') {
                    $smsService->sendReservationConfirmation(
                        $user->getPhone(),
                        $user->getName(),
                        $voyage ? $voyage->getTitre() : 'Voyage',
                        $voyage ? $voyage->getDestination() : '',
                        $voyage && $voyage->getDateDepart() ? $voyage->getDateDepart()->format('d/m/Y') : '',
                        $voyage && $voyage->getDateRetour() ? $voyage->getDateRetour()->format('d/m/Y') : '',
                        $reservation->getNbrPersonnes() ?? 1,
                        (string) ($reservation->getMontantTotal() ?? '0'),
                        (string) $reservation->getId(),
                    );
                } elseif ($statut === 'ANNULEE') {
                    $smsService->sendReservationCancellation(
                        $user->getPhone(),
                        $user->getName(),
                        $voyage ? $voyage->getTitre() : 'Voyage',
                        $voyage ? $voyage->getDestination() : '',
                        (string) ($reservation->getMontantTotal() ?? '0'),
                        (string) $reservation->getId(),
                    );
                }
            }

            // Send email notification to client
            if ($user && $user->getEmail()) {
                $voyage = $reservation->getVoyage();
                if ($statut === 'CONFIRMEE') {
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
                } elseif ($statut === 'ANNULEE') {
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

            $this->addFlash('success', 'Statut mis à jour : ' . $reservation->getStatutLabel());
        }
        return $this->redirectToRoute('agent_reservation_index');
    }

    // ===================== EVENEMENT =====================

    #[Route('/evenement', name: 'agent_evenement_index')]
    public function evenementIndex(EvenementRepository $evenementRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $evenements = $search
            ? $evenementRepository->search($search)
            : $evenementRepository->findBy([], ['dateEvent' => 'ASC']);

        return $this->render('agent/evenement/index.html.twig', [
            'evenements' => $evenements,
            'search'     => $search,
        ]);
    }

    #[Route('/evenement/new', name: 'agent_evenement_new')]
    public function evenementNew(Request $request, EntityManagerInterface $em, EvenementGeolocationService $evenementGeolocation): Response
    {
        $this->ensureRole($request);
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($evenement);
            $evenementGeolocation->resolveAndApply($evenement);
            $em->flush();
            $this->addFlash('success', 'Événement créé avec succès !');
            return $this->redirectToRoute('agent_evenement_index');
        }

        return $this->render('agent/evenement/new.html.twig', [
            'form'      => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/{id}', name: 'agent_evenement_show', requirements: ['id' => '\d+'])]
    public function evenementShow(
        Request $request,
        Evenement $evenement,
        EvenementGeolocationService $evenementGeolocation,
        EntityManagerInterface $em,
    ): Response {
        $this->ensureRole($request);
        if (!$evenement->hasMapCoordinates()) {
            $evenementGeolocation->resolveAndApply($evenement);
            $em->flush();
        }

        return $this->render('agent/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/{id}/edit', name: 'agent_evenement_edit', requirements: ['id' => '\d+'])]
    public function evenementEdit(
        Request $request,
        Evenement $evenement,
        EntityManagerInterface $em,
        EvenementGeolocationService $evenementGeolocation,
    ): Response {
        $this->ensureRole($request);
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementGeolocation->resolveAndApply($evenement);
            $em->flush();
            $this->addFlash('success', 'Événement modifié avec succès !');
            return $this->redirectToRoute('agent_evenement_index');
        }

        return $this->render('agent/evenement/edit.html.twig', [
            'form'      => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    // ===================== RESERVATION EVENEMENT =====================

    #[Route('/reservation-evenement', name: 'agent_reservation_evenement_index')]
    public function reservationEvenementIndex(ReservationEvenementRepository $repo, UtilisateurRepository $utilisateurRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $statut = $request->query->get('statut', '');
        $reservations = $statut
            ? $repo->findBy(['statut' => $statut], ['dateReservation' => 'DESC'])
            : $repo->findBy([], ['dateReservation' => 'DESC']);

        return $this->render('agent/reservation_evenement/index.html.twig', [
            'reservations'  => $reservations,
            'currentStatut' => $statut,
            'usersById'     => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation-evenement/new', name: 'agent_reservation_evenement_new')]
    public function reservationEvenementNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $reservation = new ReservationEvenement();
        $reservation->setIdUser($request->getSession()->get('user_id', 2));
        $form = $this->createForm(ReservationEvenementType::class, $reservation, ['user_role' => 'AGENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation créée avec succès !');
            return $this->redirectToRoute('agent_reservation_evenement_index');
        }

        return $this->render('agent/reservation_evenement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation-evenement/{id}', name: 'agent_reservation_evenement_show', requirements: ['id' => '\d+'])]
    public function reservationEvenementShow(Request $request, ReservationEvenement $reservation, UtilisateurRepository $utilisateurRepository): Response
    {
        $this->ensureRole($request);
        return $this->render('agent/reservation_evenement/show.html.twig', [
            'reservation' => $reservation,
            'usersById'   => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation-evenement/{id}/edit', name: 'agent_reservation_evenement_edit', requirements: ['id' => '\d+'])]
    public function reservationEvenementEdit(Request $request, ReservationEvenement $reservation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $form = $this->createForm(ReservationEvenementType::class, $reservation, ['user_role' => 'AGENT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès !');
            return $this->redirectToRoute('agent_reservation_evenement_index');
        }

        return $this->render('agent/reservation_evenement/edit.html.twig', [
            'form'        => $form->createView(),
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation-evenement/{id}/status/{statut}', name: 'agent_reservation_evenement_status', requirements: ['id' => '\d+'])]
    public function reservationEvenementStatus(Request $request, ReservationEvenement $reservation, string $statut, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $validStatuts = ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE'];
        if (in_array($statut, $validStatuts)) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Statut mis à jour : ' . $reservation->getStatutLabel());
        }
        return $this->redirectToRoute('agent_reservation_evenement_index');
    }

    // ===================== AI DESCRIPTION GENERATOR =====================

    #[Route('/voyage/generate-description', name: 'agent_voyage_generate_description', methods: ['POST'])]
    public function voyageGenerateDescription(Request $request, VoyageDescriptionGeneratorService $generator): JsonResponse
    {
        $this->ensureRole($request);

        $data = json_decode($request->getContent(), true);
        $destination = trim($data['destination'] ?? '');
        if ($destination === '') {
            return new JsonResponse(['error' => 'Le champ destination est requis.'], 400);
        }

        if (!$generator->isEnabled()) {
            return new JsonResponse(['error' => 'Le service IA n\'est pas configuré (clé API Gemini manquante).'], 503);
        }

        $description = $generator->generate(
            $destination,
            $data['categorie'] ?? null,
            $data['dateDepart'] ?? null,
            $data['dateRetour'] ?? null,
            $data['prix'] ?? null,
        );

        if ($description === null || $description === '') {
            return new JsonResponse(['error' => 'Impossible de générer la description. Réessayez.'], 500);
        }

        return new JsonResponse(['description' => $description]);
    }

    // ===================== AI BUSINESS INSIGHTS =====================

    #[Route('/voyage/insights', name: 'agent_voyage_insights', methods: ['POST'])]
    public function voyageInsights(Request $request, VoyageInsightsService $insightsService): JsonResponse
    {
        $this->ensureRole($request);

        if (!$insightsService->isEnabled()) {
            return new JsonResponse(['error' => 'Service IA non configuré (clé API manquante).'], 503);
        }

        $insights = $insightsService->generateInsights();
        if ($insights === null || $insights === '') {
            return new JsonResponse(['error' => 'Impossible de générer les insights. Réessayez.'], 500);
        }

        return new JsonResponse(['insights' => $insights]);
    }

    // ===================== QR CODE & FACTURE =====================

    #[Route('/reservation/{id}/qrcode', name: 'agent_reservation_qrcode', requirements: ['id' => '\d+'])]
    public function reservationQrCode(Request $request, ReservationVoyage $reservation, QRCodeService $qrCodeService, UserRepository $userRepository): Response
    {
        $this->ensureRole($request);

        return $this->render('agent/reservation/qrcode.html.twig', [
            'reservation' => $reservation,
            'qrCode'      => $qrCodeService->generateForReservation($reservation),
            'usersById'   => $userRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation/{id}/invoice', name: 'agent_reservation_invoice', requirements: ['id' => '\d+'])]
    public function reservationInvoice(Request $request, ReservationVoyage $reservation, InvoiceService $invoiceService): Response
    {
        $this->ensureRole($request);

        $pdfContent = $invoiceService->generatePdf($reservation);

        return new Response($pdfContent, 200, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="facture-reservation-' . $reservation->getId() . '.pdf"',
        ]);
    }

    private function ensureRole(Request $request): void
    {
        $this->denyAccessUnlessGranted('ROLE_AGENT');
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $session = $request->getSession();
        $session->set('user_role', 'AGENT');
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getName());
    }
}
