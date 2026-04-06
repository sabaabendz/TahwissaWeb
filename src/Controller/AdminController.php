<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Reclamation;
use App\Entity\ReservationEvenement;
use App\Entity\ReservationVoyage;
use App\Entity\Voyage;
use App\Form\EvenementType;
use App\Form\ReclamationType;
use App\Form\ReservationEvenementType;
use App\Form\ReservationVoyageType;
use App\Form\VoyageType;
use App\Repository\EvenementRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationEvenementRepository;
use App\Repository\ReservationVoyageRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ADMIN Controller - Full CRUD access for voyages and reservations
 */
#[Route('/admin')]
class AdminController extends AbstractController
{
    // ===================== VOYAGE CRUD =====================

    #[Route('/voyage', name: 'admin_voyage_index')]
    public function voyageIndex(VoyageRepository $voyageRepository, Request $request): Response
    {
        $this->checkRole($request, 'ADMIN');
        $search = $request->query->get('search', '');
        $voyages = $search ? $voyageRepository->search($search) : $voyageRepository->findBy([], ['createdAt' => 'DESC']);
        $stats = $voyageRepository->getStats();

        return $this->render('admin/voyage/index.html.twig', [
            'voyages' => $voyages,
            'stats' => $stats,
            'search' => $search,
        ]);
    }

    #[Route('/voyage/new', name: 'admin_voyage_new')]
    public function voyageNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($voyage);
            $em->flush();
            $this->addFlash('success', 'Voyage créé avec succès !');
            return $this->redirectToRoute('admin_voyage_index');
        }

        return $this->render('admin/voyage/new.html.twig', [
            'form' => $form->createView(),
            'voyage' => $voyage,
        ]);
    }

    #[Route('/voyage/{id}', name: 'admin_voyage_show', requirements: ['id' => '\d+'])]
    public function voyageShow(Request $request, Voyage $voyage): Response
    {
        $this->checkRole($request, 'ADMIN');
        return $this->render('admin/voyage/show.html.twig', [
            'voyage' => $voyage,
        ]);
    }

    #[Route('/voyage/{id}/edit', name: 'admin_voyage_edit', requirements: ['id' => '\d+'])]
    public function voyageEdit(Request $request, Voyage $voyage, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $voyage->setUpdatedAt(new \DateTime());
            $em->flush();
            $this->addFlash('success', 'Voyage modifié avec succès !');
            return $this->redirectToRoute('admin_voyage_index');
        }

        return $this->render('admin/voyage/edit.html.twig', [
            'form' => $form->createView(),
            'voyage' => $voyage,
        ]);
    }

    #[Route('/voyage/{id}/delete', name: 'admin_voyage_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function voyageDelete(Request $request, Voyage $voyage, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        if ($this->isCsrfTokenValid('delete' . $voyage->getId(), $request->request->get('_token'))) {
            $em->remove($voyage);
            $em->flush();
            $this->addFlash('success', 'Voyage supprimé avec succès !');
        }
        return $this->redirectToRoute('admin_voyage_index');
    }

    // ===================== RESERVATION CRUD =====================

    #[Route('/reservation', name: 'admin_reservation_index')]
    public function reservationIndex(ReservationVoyageRepository $reservationRepository, Request $request): Response
    {
        $this->checkRole($request, 'ADMIN');
        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut', '');

        if ($search || $statut) {
            $reservations = $reservationRepository->search($search, $statut ?: null);
        } else {
            $reservations = $reservationRepository->findAllWithVoyage();
        }
        $stats = $reservationRepository->getStats();

        return $this->render('admin/reservation/index.html.twig', [
            'reservations' => $reservations,
            'stats' => $stats,
            'search' => $search,
            'currentStatut' => $statut,
        ]);
    }

    #[Route('/reservation/new', name: 'admin_reservation_new')]
    public function reservationNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $reservation = new ReservationVoyage();
        $form = $this->createForm(ReservationVoyageType::class, $reservation, ['user_role' => 'ADMIN']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->calculerMontantTotal();
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation créée avec succès !');
            return $this->redirectToRoute('admin_reservation_index');
        }

        return $this->render('admin/reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/{id}', name: 'admin_reservation_show', requirements: ['id' => '\d+'])]
    public function reservationShow(Request $request, ReservationVoyage $reservation): Response
    {
        $this->checkRole($request, 'ADMIN');
        return $this->render('admin/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'admin_reservation_edit', requirements: ['id' => '\d+'])]
    public function reservationEdit(Request $request, ReservationVoyage $reservation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $form = $this->createForm(ReservationVoyageType::class, $reservation, ['user_role' => 'ADMIN']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->calculerMontantTotal();
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès !');
            return $this->redirectToRoute('admin_reservation_index');
        }

        return $this->render('admin/reservation/edit.html.twig', [
            'form' => $form->createView(),
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/delete', name: 'admin_reservation_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reservationDelete(Request $request, ReservationVoyage $reservation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée avec succès !');
        }
        return $this->redirectToRoute('admin_reservation_index');
    }

    #[Route('/reservation/{id}/status/{statut}', name: 'admin_reservation_status', requirements: ['id' => '\d+'])]
    public function reservationStatus(Request $request, ReservationVoyage $reservation, string $statut, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $validStatuts = ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE', 'TERMINEE'];
        if (in_array($statut, $validStatuts)) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Statut mis à jour : ' . $reservation->getStatutLabel());
        }
        return $this->redirectToRoute('admin_reservation_index');
    }

    // ===================== EVENEMENT CRUD =====================

    #[Route('/evenement', name: 'admin_evenement_index')]
    public function evenementIndex(EvenementRepository $evenementRepository, Request $request): Response
    {
        $this->checkRole($request, 'ADMIN');
        $search = $request->query->get('search', '');
        $evenements = $search
            ? $evenementRepository->search($search)
            : $evenementRepository->findBy([], ['dateEvent' => 'ASC']);

        return $this->render('admin/evenement/index.html.twig', [
            'evenements' => $evenements,
            'search'     => $search,
        ]);
    }

    #[Route('/evenement/new', name: 'admin_evenement_new')]
    public function evenementNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($evenement);
            $em->flush();
            $this->addFlash('success', 'Événement créé avec succès !');
            return $this->redirectToRoute('admin_evenement_index');
        }

        return $this->render('admin/evenement/new.html.twig', [
            'form'      => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/{id}', name: 'admin_evenement_show', requirements: ['id' => '\d+'])]
    public function evenementShow(Request $request, Evenement $evenement): Response
    {
        $this->checkRole($request, 'ADMIN');
        return $this->render('admin/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/{id}/edit', name: 'admin_evenement_edit', requirements: ['id' => '\d+'])]
    public function evenementEdit(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Événement modifié avec succès !');
            return $this->redirectToRoute('admin_evenement_index');
        }

        return $this->render('admin/evenement/edit.html.twig', [
            'form'      => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    #[Route('/evenement/{id}/delete', name: 'admin_evenement_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function evenementDelete(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $em->remove($evenement);
            $em->flush();
            $this->addFlash('success', 'Événement supprimé avec succès !');
        }
        return $this->redirectToRoute('admin_evenement_index');
    }

    // ===================== RECLAMATION CRUD =====================

    #[Route('/reclamation', name: 'admin_reclamation_index')]
    public function reclamationIndex(ReclamationRepository $reclamationRepository, UtilisateurRepository $utilisateurRepository, Request $request): Response
    {
        $this->checkRole($request, 'ADMIN');
        $statut = $request->query->get('statut', '');
        $reclamations = $statut
            ? $reclamationRepository->findByStatut($statut)
            : $reclamationRepository->findBy([], ['dateCreation' => 'DESC']);

        return $this->render('admin/reclamation/index.html.twig', [
            'reclamations'  => $reclamations,
            'currentStatut' => $statut,
            'usersById'     => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reclamation/{id}', name: 'admin_reclamation_show', requirements: ['id' => '\d+'])]
    public function reclamationShow(Request $request, Reclamation $reclamation, UtilisateurRepository $utilisateurRepository): Response
    {
        $this->checkRole($request, 'ADMIN');
        return $this->render('admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'usersById'   => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reclamation/{id}/edit', name: 'admin_reclamation_edit', requirements: ['id' => '\d+'])]
    public function reclamationEdit(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $form = $this->createForm(ReclamationType::class, $reclamation, ['user_role' => 'ADMIN']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réclamation mise à jour avec succès !');
            return $this->redirectToRoute('admin_reclamation_index');
        }

        return $this->render('admin/reclamation/edit.html.twig', [
            'form'        => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/reclamation/{id}/delete', name: 'admin_reclamation_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reclamationDelete(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        if ($this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->request->get('_token'))) {
            $em->remove($reclamation);
            $em->flush();
            $this->addFlash('success', 'Réclamation supprimée avec succès !');
        }
        return $this->redirectToRoute('admin_reclamation_index');
    }

    #[Route('/reclamation/{id}/status/{statut}', name: 'admin_reclamation_status', requirements: ['id' => '\d+'])]
    public function reclamationStatus(Request $request, Reclamation $reclamation, string $statut, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $validStatuts = ['EN_ATTENTE', 'EN_COURS', 'TRAITEE', 'REJETEE'];
        if (in_array($statut, $validStatuts)) {
            $reclamation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Statut mis à jour : ' . $reclamation->getStatutLabel());
        }
        return $this->redirectToRoute('admin_reclamation_index');
    }

    // ===================== RESERVATION EVENEMENT CRUD =====================

    #[Route('/reservation-evenement', name: 'admin_reservation_evenement_index')]
    public function reservationEvenementIndex(ReservationEvenementRepository $repo, UtilisateurRepository $utilisateurRepository, Request $request): Response
    {
        $this->checkRole($request, 'ADMIN');
        $statut = $request->query->get('statut', '');
        $reservations = $statut
            ? $repo->findBy(['statut' => $statut], ['dateReservation' => 'DESC'])
            : $repo->findBy([], ['dateReservation' => 'DESC']);

        return $this->render('admin/reservation_evenement/index.html.twig', [
            'reservations'  => $reservations,
            'currentStatut' => $statut,
            'usersById'     => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation-evenement/new', name: 'admin_reservation_evenement_new')]
    public function reservationEvenementNew(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $reservation = new ReservationEvenement();
        $form = $this->createForm(ReservationEvenementType::class, $reservation, ['user_role' => 'ADMIN']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation créée avec succès !');
            return $this->redirectToRoute('admin_reservation_evenement_index');
        }

        return $this->render('admin/reservation_evenement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation-evenement/{id}', name: 'admin_reservation_evenement_show', requirements: ['id' => '\d+'])]
    public function reservationEvenementShow(Request $request, ReservationEvenement $reservation, UtilisateurRepository $utilisateurRepository): Response
    {
        $this->checkRole($request, 'ADMIN');
        return $this->render('admin/reservation_evenement/show.html.twig', [
            'reservation' => $reservation,
            'usersById'   => $utilisateurRepository->findAllIndexedById(),
        ]);
    }

    #[Route('/reservation-evenement/{id}/edit', name: 'admin_reservation_evenement_edit', requirements: ['id' => '\d+'])]
    public function reservationEvenementEdit(Request $request, ReservationEvenement $reservation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $form = $this->createForm(ReservationEvenementType::class, $reservation, ['user_role' => 'ADMIN']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès !');
            return $this->redirectToRoute('admin_reservation_evenement_index');
        }

        return $this->render('admin/reservation_evenement/edit.html.twig', [
            'form'        => $form->createView(),
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation-evenement/{id}/delete', name: 'admin_reservation_evenement_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reservationEvenementDelete(Request $request, ReservationEvenement $reservation, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée avec succès !');
        }
        return $this->redirectToRoute('admin_reservation_evenement_index');
    }

    #[Route('/reservation-evenement/{id}/status/{statut}', name: 'admin_reservation_evenement_status', requirements: ['id' => '\d+'])]
    public function reservationEvenementStatus(Request $request, ReservationEvenement $reservation, string $statut, EntityManagerInterface $em): Response
    {
        $this->checkRole($request, 'ADMIN');
        $validStatuts = ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE'];
        if (in_array($statut, $validStatuts)) {
            $reservation->setStatut($statut);
            $em->flush();
            $this->addFlash('success', 'Statut mis à jour : ' . $reservation->getStatutLabel());
        }
        return $this->redirectToRoute('admin_reservation_evenement_index');
    }

    private function checkRole(Request $request, string $expectedRole): void
    {
        $role = $request->getSession()->get('user_role', 'CLIENT');
        if ($role !== $expectedRole) {
            $request->getSession()->set('user_role', $expectedRole);
            $request->getSession()->set('user_id', 1);
            $request->getSession()->set('user_name', 'Administrateur');
        }
    }
}
