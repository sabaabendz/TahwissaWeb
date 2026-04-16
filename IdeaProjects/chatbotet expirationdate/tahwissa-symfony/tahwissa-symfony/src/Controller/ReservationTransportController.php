<?php

namespace App\Controller;

use App\Entity\ReservationTransport;
use App\Form\ReservationTransportType;
use App\Repository\ReservationTransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/reservation-transport')]
class ReservationTransportController extends AbstractController
{
    private function checkRole(Request $request): void
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
    }

    #[Route('/', name: 'admin_reservation_transport_index', methods: ['GET'])]
    public function index(Request $request, ReservationTransportRepository $repo, \App\Repository\UtilisateurRepository $userRepo): Response
    {
        $this->checkRole($request);
        
        return $this->render('admin/reservation_transport/index.html.twig', [
            'reservations' => $repo->findAll(),
            'usersById' => $userRepo->findAllIndexedById(),
        ]);
    }

    #[Route('/new', name: 'admin_reservation_transport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        $reservation = new ReservationTransport();
        $form = $this->createForm(ReservationTransportType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation ajoutée avec succès !');
            return $this->redirectToRoute('admin_reservation_transport_index');
        }

        return $this->render('admin/reservation_transport/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_reservation_transport_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationTransport $reservationTransport, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        $form = $this->createForm(ReservationTransportType::class, $reservationTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée avec succès !');
            return $this->redirectToRoute('admin_reservation_transport_index');
        }

        return $this->render('admin/reservation_transport/edit.html.twig', [
            'form' => $form->createView(),
            'reservation' => $reservationTransport,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_reservation_transport_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, ReservationTransport $reservationTransport, EntityManagerInterface $em): Response
    {
        $this->checkRole($request);
        
        if ($this->isCsrfTokenValid('delete' . $reservationTransport->getIdReservation(), $request->request->get('_token'))) {
            $em->remove($reservationTransport);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée avec succès !');
        }
        return $this->redirectToRoute('admin_reservation_transport_index');
    }
}
