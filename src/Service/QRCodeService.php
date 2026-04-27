<?php

namespace App\Service;

use App\Entity\ReservationEvenement;
use App\Entity\ReservationVoyage;
use App\Entity\User;
use App\Repository\UserRepository;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\SvgWriter;

class QRCodeService
{
    public function __construct(
        private UserRepository $userRepository,
    ) {}

    /**
     * Generate a QR code data URI for a reservation.
     * Encodes a clean, readable text summary (like a boarding pass).
     */
    public function generateForReservation(ReservationVoyage $reservation): string
    {
        $voyage = $reservation->getVoyage();
        $client = $this->userRepository->find($reservation->getIdUtilisateur());

        // Build a clean, readable text that looks great when scanned
        $lines = [];
        $lines[] = '══════════════════════';
        $lines[] = '   🌍 TAHWISSA';
        $lines[] = '   Agence de Voyages';
        $lines[] = '══════════════════════';
        $lines[] = '';
        $lines[] = '📋 RÉSERVATION #' . $reservation->getId();
        $lines[] = '👤 Client : ' . ($client ? $client->getName() : 'Client #' . $reservation->getIdUtilisateur());
        $lines[] = '──────────────────────';

        if ($voyage) {
            $lines[] = '✈️  Voyage : ' . $voyage->getTitre();
            $lines[] = '📍 Destination : ' . $voyage->getDestination();

            if ($voyage->getDateDepart()) {
                $lines[] = '📅 Départ : ' . $voyage->getDateDepart()->format('d/m/Y');
            }
            if ($voyage->getDateRetour()) {
                $lines[] = '📅 Retour : ' . $voyage->getDateRetour()->format('d/m/Y');
            }
        }

        $lines[] = '👥 Personnes : ' . $reservation->getNbrPersonnes();
        $lines[] = '💰 Montant : ' . number_format((float)$reservation->getMontantTotal(), 2, ',', ' ') . ' TND';
        $lines[] = '';
        $lines[] = '──────────────────────';

        $statut = match ($reservation->getStatut()) {
            'CONFIRMEE' => '✅ CONFIRMÉE',
            'EN_ATTENTE' => '⏳ EN ATTENTE',
            'ANNULEE' => '❌ ANNULÉE',
            'TERMINEE' => '🏁 TERMINÉE',
            default => $reservation->getStatut(),
        };
        $lines[] = '🔖 Statut : ' . $statut;

        if ($reservation->getDateReservation()) {
            $lines[] = '🕐 Réservé le : ' . $reservation->getDateReservation()->format('d/m/Y H:i');
        }

        $lines[] = '';
        $lines[] = '══════════════════════';
        $lines[] = 'Réf: TAHWISSA-RES-' . $reservation->getId();
        $lines[] = '══════════════════════';

        $data = implode("\n", $lines);

        $result = Builder::create()
            ->writer($this->getPreferredWriter())
            ->data($data)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::Medium)
            ->size(300)
            ->margin(12)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->foregroundColor(new Color(30, 41, 59))
            ->backgroundColor(new Color(255, 255, 255))
            ->build();

        return $result->getDataUri();
    }

    /**
     * Generate a QR code data URI for an event reservation.
     *
     * The payload is kept short (ASCII, single line) so the QR matrix stays
     * low-version and remains easy to scan after Dompdf rasterises the image.
     * A long multi-line UTF-8 payload produces a dense code that phones often
     * fail to read once scaled inside a PDF.
     */
    public function generateForEvenementReservation(ReservationEvenement $reservation): string
    {
        $evenement = $reservation->getEvenement();
        $eventId   = $evenement?->getId() ?? 0;

        // Compact, pipe-separated ASCII — readable when scanned, minimal module count
        $parts = [
            'TAHWISSA',
            'EVT',
            'R' . $reservation->getId(),
            'E' . $eventId,
            'U' . ($reservation->getIdUser() ?? 0),
            'P' . $reservation->getNbPlacesReservees(),
            'CONF',
        ];
        $data = implode('|', $parts);

        // PNG raster is much more reliable in Dompdf than SVG paths.
        $writer = extension_loaded('gd') ? new PngWriter() : new SvgWriter();

        $result = Builder::create()
            ->writer($writer)
            ->data($data)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(480)
            ->margin(16)
            ->roundBlockSizeMode(RoundBlockSizeMode::Enlarge)
            ->foregroundColor(new Color(0, 0, 0))
            ->backgroundColor(new Color(255, 255, 255))
            ->build();

        return $result->getDataUri();
    }

    /**
     * @return array{content:string,mimeType:string,fileExtension:string}
     */
    public function generateUserProfileQr(User $user, string $profileUrl): array
    {
        $payload = $this->buildUserProfilePayload($user, $profileUrl);

        $result = Builder::create()
            ->writer($this->getPreferredWriter())
            ->data($payload)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::Medium)
            ->size(320)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->foregroundColor(new Color(30, 41, 59))
            ->backgroundColor(new Color(255, 255, 255))
            ->build();

        $isPng = extension_loaded('gd');

        return [
            'content' => $result->getString(),
            'mimeType' => $isPng ? 'image/png' : 'image/svg+xml',
            'fileExtension' => $isPng ? 'png' : 'svg',
        ];
    }

    private function buildUserProfilePayload(User $user, string $profileUrl): string
    {
        $roleName = strtoupper((string) ($user->getRole()?->getName() ?? 'UNASSIGNED'));
        $status = $user->isActive() ? 'ACTIF' : 'INACTIF';
        $createdAt = $user->getCreatedAt()?->format('d/m/Y H:i') ?? '-';

        $lines = [];
        $lines[] = 'TAHWISSA - FICHE UTILISATEUR';
        $lines[] = '----------------------------';
        $lines[] = 'ID: ' . $user->getId();
        $lines[] = 'Nom: ' . $user->getName();
        $lines[] = 'Email: ' . (string) $user->getEmail();
        $lines[] = 'Role: ' . $roleName;
        $lines[] = 'Statut: ' . $status;
        $lines[] = 'Inscription: ' . $createdAt;
        $lines[] = 'Profil: ' . $profileUrl;

        return implode("\n", $lines);
    }

    private function getPreferredWriter(): object
    {
        if (extension_loaded('gd')) {
            return new PngWriter();
        }

        return new SvgWriter();
    }
}
