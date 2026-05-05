<?php

namespace App\Repository;

use App\Entity\Destination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Destination>
 */
class DestinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Destination::class);
    }

    /**
     * @return Destination[] Returns an array of Destination objects
     */
    public function searchByNom(string $keyword): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.nom LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->orderBy('d.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère toutes les destinations avec leurs points d'intérêt
     * (Évite le problème N+1)
     * 
     * @return Destination[]
     */
    public function findAllWithPointsInteret(): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.pointsInteret', 'p')
            ->addSelect('p')
            ->orderBy('d.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les destinations paginées avec leurs points d'intérêt
     * 
     * @return Destination[]
     */
    public function findPaginatedWithPointsInteret(int $offset, int $limit): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.pointsInteret', 'p')
            ->addSelect('p')
            ->orderBy('d.nom', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de destinations
     */
    public function countDestinations(): int
    {
        return $this->createQueryBuilder('d')
            ->select('COUNT(d.idDestination)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}