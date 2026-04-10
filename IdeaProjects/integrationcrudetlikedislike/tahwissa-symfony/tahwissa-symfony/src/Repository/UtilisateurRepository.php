<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Utilisateur>
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    /**
     * Returns all users as an array indexed by their ID: [id => Utilisateur]
     * Useful for resolving names in templates without N+1 queries.
     */
    public function findAllIndexedById(): array
    {
        $users = $this->findAll();
        $indexed = [];
        foreach ($users as $user) {
            $indexed[$user->getId()] = $user;
        }
        return $indexed;
    }
}
