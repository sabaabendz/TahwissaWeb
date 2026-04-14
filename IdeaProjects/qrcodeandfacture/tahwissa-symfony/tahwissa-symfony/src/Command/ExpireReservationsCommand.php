<?php

namespace App\Command;

use App\Entity\ReservationVoyage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:reservations:expire',
    description: 'Annule automatiquement les réservations EN_ATTENTE non payées après 30 minutes et remet les places en stock',
)]
class ExpireReservationsCommand extends Command
{
    public function __construct(private EntityManagerInterface $em)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption('minutes', 'm', InputOption::VALUE_OPTIONAL, 'Délai d\'expiration en minutes', 30)
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Simuler sans modifier la BDD');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $minutes = (int) $input->getOption('minutes');
        $dryRun = $input->getOption('dry-run');

        $deadline = new \DateTime(sprintf('-%d minutes', $minutes));

        $io->info(sprintf(
            'Recherche des réservations EN_ATTENTE créées avant %s (%d min)...',
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

            $io->text(sprintf(
                '  → Réservation #%d — %s — %d pers. — créée le %s',
                $reservation->getId(),
                $voyageName,
                $reservation->getNbrPersonnes(),
                $reservation->getDateCreation()?->format('d/m/Y H:i')
            ));

            if (!$dryRun) {
                // Passer en ANNULEE
                $reservation->setStatut('ANNULEE');

                // Remettre les places en stock
                if ($voyage) {
                    $voyage->setPlacesDisponibles(
                        $voyage->getPlacesDisponibles() + $reservation->getNbrPersonnes()
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
