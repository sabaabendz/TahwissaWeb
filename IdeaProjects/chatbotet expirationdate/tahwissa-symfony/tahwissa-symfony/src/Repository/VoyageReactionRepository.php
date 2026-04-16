<?php

namespace App\Repository;

use App\Entity\VoyageReaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VoyageReaction>
 */
class VoyageReactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoyageReaction::class);
    }

    /**
     * Récupère le nombre de likes et dislikes pour un voyage donné
     */
    public function getReactionCounts(int $voyageId): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r.type, COUNT(r.id) as cnt')
            ->where('r.voyage = :voyage')
            ->groupBy('r.type')
            ->setParameter('voyage', $voyageId);
        
        $results = $qb->getQuery()->getResult();
        $counts = ['LIKE' => 0, 'DISLIKE' => 0];
        foreach ($results as $row) {
            $counts[$row['type']] = (int) $row['cnt'];
        }
        return $counts;
    }

    /**
     * Vérifie si un utilisateur a déjà réagi à un voyage
     */
    public function findExistingReaction(int $userId, int $voyageId): ?VoyageReaction
    {
        return $this->findOneBy([
            'user' => $userId,
            'voyage' => $voyageId
        ]);
    }
}