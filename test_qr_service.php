<?php
require 'vendor/autoload.php';

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

$kernel = new Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$qrService = $container->get('App\Service\QRCodeService');
$em = $container->get('doctrine.orm.entity_manager');

$repo = $em->getRepository(\App\Entity\ReservationVoyage::class);
$reservation = $repo->findOneBy([]);
if ($reservation) {
    try {
        $qrCode = $qrService->generateForReservation($reservation);
        echo "VOYAGE QR SUCCESS\n";
    } catch (\Throwable $e) {
        echo "VOYAGE QR ERROR: " . $e->getMessage() . "\n";
    }
}

$repoEvt = $em->getRepository(\App\Entity\ReservationEvenement::class);
$reservationEvt = $repoEvt->findOneBy([]);
if ($reservationEvt) {
    try {
        $qrCodeEvt = $qrService->generateForEvenementReservation($reservationEvt);
        echo "EVENEMENT QR SUCCESS\n";
    } catch (\Throwable $e) {
        echo "EVENEMENT QR ERROR: " . $e->getMessage() . "\n";
    }
}
