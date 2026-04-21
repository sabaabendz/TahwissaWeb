<?php

namespace App\Controller;

use App\Entity\ReservationVoyage;
use App\Repository\ReservationVoyageRepository;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(VoyageRepository $voyageRepository, ReservationVoyageRepository $reservationRepository): Response
    {
        $voyages = $voyageRepository->findActifs();
        $stats = $reservationRepository->getStats();
        $voyageStats = $voyageRepository->getStats();

        return $this->render('home/index.html.twig', [
            'voyages' => $voyages,
            'stats' => $stats,
            'voyageStats' => $voyageStats,
        ]);
    }

    /**
     * Redirect to the appropriate dashboard based on the logged-in user's role.
     * If not logged in, redirect to login.
     */
    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $roleName = strtoupper((string) ($user->getRole()?->getName() ?? 'USER'));

        return match ($roleName) {
            'ADMIN' => $this->redirectToRoute('admin_reservation_index'),
            'AGENT' => $this->redirectToRoute('agent_reservation_index'),
            default => $this->redirectToRoute('client_voyage_index'),
        };
    }

    /**
     * Public reservation verification page — accessible via QR code scan (no login required)
     */
    #[Route('/reservation/verify/{id}', name: 'reservation_verify', requirements: ['id' => '\d+'])]
    public function verifyReservation(ReservationVoyage $reservation): Response
    {
        return $this->render('verify/reservation.html.twig', [
            'reservation' => $reservation,
        ]);
    }
}
