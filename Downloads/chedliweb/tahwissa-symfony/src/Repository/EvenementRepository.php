<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    /**
     * Find disponible events
     */
    public function findDisponibles(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.statut = :statut')
            ->setParameter('statut', 'DISPONIBLE')
            ->orderBy('e.dateEvent', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find upcoming events from today
     */
    public function findUpcoming(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateEvent >= :today')
            ->andWhere('e.statut = :statut')
            ->setParameter('today', new \DateTime('today'))
            ->setParameter('statut', 'DISPONIBLE')
            ->orderBy('e.dateEvent', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search events by keyword
     */
    public function search(string $keyword): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.titre LIKE :kw OR e.lieu LIKE :kw OR e.categorie LIKE :kw')
            ->setParameter('kw', '%' . $keyword . '%')
            ->orderBy('e.dateEvent', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save(Evenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Evenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
