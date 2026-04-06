<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\ReservationEvenement;
use App\Entity\ReservationVoyage;
use App\Form\ReclamationType;
use App\Form\ReservationEvenementType;
use App\Form\ReservationVoyageType;
use App\Repository\EvenementRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationEvenementRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * CLIENT Controller - Browse voyages and manage own reservations
 */
#[Route('/client')]
class ClientController extends AbstractController
{
    // ===================== VOYAGES (Read only - Catalogue) =====================

    #[Route('/voyage', name: 'client_voyage_index')]
    public function voyageIndex(VoyageRepository $voyageRepository, Request $request): Response
    {
        $this->ensureRole($request);
        $search = $request->query->get('search', '');
        $voyages = $search ? $voyageRepository->search($search) : $voyageRepository->findActifs();

        return $this->render('client/voyage/index.html.twig', [
            'voyages' => $voyages,
            'search' => $search,
        ]);
    }

    #[Route('/voyage/{id}', name: 'client_voyage_show', requirements: ['id' => '\d+'])]
    public function voyageShow(Request $request, \App\Entity\Voyage $voyage): Response
    {
        $this->ensureRole($request);
        return $this->render('client/voyage/show.html.twig', [
            'voyage' => $voyage,
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
    public function reservationNew(Request $request, EntityManagerInterface $em, VoyageRepository $voyageRepository, ?int $voyageId = null): Response
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
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Votre réservation a été créée avec succès ! Montant total: ' . $reservation->getMontantTotal() . ' TND');
            return $this->redirectToRoute('client_reservation_index');
        }

        return $this->render('client/reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
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
                $em->flush();
                $this->addFlash('success', 'Votre réservation a été annulée.');
            } else {
                $this->addFlash('warning', 'Seules les réservations en attente peuvent être annulées.');
            }
        }

        return $this->redirectToRoute('client_reservation_index');
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
    public function evenementShow(Request $request, \App\Entity\Evenement $evenement): Response
    {
        $this->ensureRole($request);
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
    public function reservationEvenementNew(Request $request, EntityManagerInterface $em, EvenementRepository $evenementRepository, ?int $evenementId = null): Response
    {
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
            if ($evenement && $reservation->getNbPlacesReservees() > $evenement->getNbPlaces()) {
                $this->addFlash('danger', 'Désolé, il n\'y a que ' . $evenement->getNbPlaces() . ' places disponibles pour cet événement.');
                return $this->render('client/reservation_evenement/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $reservation->setStatut('EN_ATTENTE');
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Votre réservation a été créée avec succès !');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        return $this->render('client/reservation_evenement/new.html.twig', [
            'form' => $form->createView(),
        ]);
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
    public function reservationEvenementCancel(Request $request, ReservationEvenement $reservation, EntityManagerInterface $em): Response
    {
        $this->ensureRole($request);
        $userId = $request->getSession()->get('user_id', 6);
        if ($reservation->getIdUser() !== $userId) {
            $this->addFlash('danger', 'Vous n\'avez pas accès à cette réservation.');
            return $this->redirectToRoute('client_reservation_evenement_index');
        }

        if ($this->isCsrfTokenValid('cancel' . $reservation->getId(), $request->request->get('_token'))) {
            if ($reservation->getStatut() === 'EN_ATTENTE') {
                $reservation->setStatut('ANNULEE');
                $em->flush();
                $this->addFlash('success', 'Votre réservation a été annulée.');
            } else {
                $this->addFlash('warning', 'Seules les réservations en attente peuvent être annulées.');
            }
        }

        return $this->redirectToRoute('client_reservation_evenement_index');
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
}
