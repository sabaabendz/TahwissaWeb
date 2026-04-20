<?php

namespace App\Repository;

use App\Entity\PointInteret;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PointInteret>
 */
class PointInteretRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PointInteret::class);
    }

    /**
     * @return PointInteret[] Returns an array of PointInteret objects
     */
    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :type')
            ->setParameter('type', $type)
            ->orderBy('p.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function countByType(): array
    {
        $results = $this->createQueryBuilder('p')
            ->select('p.type, COUNT(p.idPointInteret) as count')
            ->groupBy('p.type')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['type']] = $result['count'];
        }
        return $stats;
    }
}