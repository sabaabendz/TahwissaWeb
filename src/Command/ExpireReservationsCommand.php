<?php

namespace App\Command;

use App\Entity\ReservationVoyage;
use App\Entity\User;
use App\Service\TwilioSmsService;
use App\Service\EmailNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:reservations:expire',
    description: 'Annule automatiquement les réservations EN_ATTENTE non confirmées après le délai configuré (30 min par défaut) et remet les places en stock',
)]
class ExpireReservationsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private TwilioSmsService $smsService,
        private EmailNotificationService $emailService,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('minutes', null, InputOption::VALUE_OPTIONAL, 'Délai d\'expiration en minutes (par défaut : 30 min)', 30)
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Simuler sans modifier la BDD');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $minutes = (int) $input->getOption('minutes');
        $dryRun = $input->getOption('dry-run');

        $deadline = new \DateTime(sprintf('-%d minutes', $minutes));

        $io->info(sprintf(
            'Recherche des réservations EN_ATTENTE créées avant %s (délai : %d min)…',
            $deadline->format('d/m/Y H:i:s'),
            $minutes
        ));

        $expiredReservations = $this->em->createQueryBuilder()
            ->select('r')
            ->from(ReservationVoyage::class, 'r')
            ->join('r.voyage', 'v')
            ->where('r.statut = :statut')
            ->andWhere('r.dateCreation < :deadline')
            ->setParameter('statut', 'EN_ATTENTE')
            ->setParameter('deadline', $deadline)
            ->getQuery()
            ->getResult();

        if (empty($expiredReservations)) {
            $io->success('Aucune réservation à expirer.');
            return Command::SUCCESS;
        }

        $count = 0;

        /** @var ReservationVoyage $reservation */
        foreach ($expiredReservations as $reservation) {
            $voyage = $reservation->getVoyage();
            $voyageName = $voyage ? $voyage->getTitre() : 'N/A';
            $destination = $voyage ? $voyage->getDestination() : '';

            $io->text(sprintf(
                '  → Réservation #%d — %s — %d pers. — créée le %s',
                $reservation->getId(),
                $voyageName,
                $reservation->getNbrPersonnes(),
                $reservation->getDateCreation()?->format('d/m/Y H:i')
            ));

            if (!$dryRun) {
                $reservation->setStatut('EXPIREE');

                // Remettre les places en stock
                if ($voyage) {
                    $voyage->setPlacesDisponibles(
                        $voyage->getPlacesDisponibles() + $reservation->getNbrPersonnes()
                    );
                }

                // Notify client by SMS
                $user = $this->em->getRepository(User::class)->find($reservation->getIdUtilisateur());
                if ($user && $user->getPhone()) {
                    $this->smsService->send(
                        $user->getPhone(),
                        "Bonjour " . $user->getName() . ",\n\n"
                        . "Votre réservation Réf #" . $reservation->getId() . " pour le voyage « " . $voyageName . " » vers " . $destination . " a expiré.\n\n"
                        . "Motif : La réservation n'a pas été confirmée dans le délai de " . $minutes . " minutes.\n"
                        . "Montant : " . $reservation->getMontantTotal() . " TND — aucun montant n'a été débité.\n\n"
                        . "Vous pouvez effectuer une nouvelle réservation à tout moment depuis votre espace client.\n\n"
                        . "— L'équipe Tahwissa"
                    );
                }

                // Notify client by email
                if ($user && $user->getEmail()) {
                    $this->emailService->sendReservationExpired(
                        $user->getEmail(),
                        $user->getName(),
                        $voyageName,
                        $destination,
                        (string) ($reservation->getMontantTotal() ?? '0'),
                        (string) $reservation->getId(),
                    );
                }
            }

            $count++;
        }

        if (!$dryRun) {
            $this->em->flush();
        }

        $prefix = $dryRun ? '[DRY-RUN] ' : '';
        $io->success(sprintf(
            '%s%d réservation(s) expirée(s) et places remises en stock.',
            $prefix,
            $count
        ));

        return Command::SUCCESS;
    }
}
