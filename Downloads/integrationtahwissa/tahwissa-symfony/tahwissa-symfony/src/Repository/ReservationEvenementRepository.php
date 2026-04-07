<?php

namespace App\Repository;

use App\Entity\ReservationEvenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationEvenement>
 */
class ReservationEvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationEvenement::class);
    }

    /**
     * Find reservations for a given user
     */
    public function findByUser(int $idUser): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.idUser = :idUser')
            ->setParameter('idUser', $idUser)
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reservations for a given event
     */
    public function findByEvenement(int $idEvenement): array
    {
        return $this->createQueryBuilder('r')
            ->join('r.evenement', 'e')
            ->andWhere('e.id = :idEvenement')
            ->setParameter('idEvenement', $idEvenement)
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count total reserved places for a given event
     */
    public function countPlacesReservees(int $idEvenement): int
    {
        $result = $this->createQueryBuilder('r')
            ->select('SUM(r.nbPlacesReservees)')
            ->join('r.evenement', 'e')
            ->andWhere('e.id = :idEvenement')
            ->andWhere('r.statut != :annulee')
            ->setParameter('idEvenement', $idEvenement)
            ->setParameter('annulee', 'ANNULEE')
            ->getQuery()
            ->getSingleScalarResult();

        return (int) ($result ?? 0);
    }

    public function save(ReservationEvenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReservationEvenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
