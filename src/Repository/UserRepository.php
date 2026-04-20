<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function findByEmail(string $email): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findActiveUsers(): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('u.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByRole(string $roleName): array
    {
        return $this->createQueryBuilder('u')
            ->join('u.role', 'r')
            ->andWhere('r.name = :roleName')
            ->setParameter('roleName', $roleName)
            ->orderBy('u.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByRoleAndSearch(string $roleName, ?string $searchQuery = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->join('u.role', 'r')
            ->andWhere('r.name = :roleName')
            ->setParameter('roleName', $roleName);

        if ($searchQuery) {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('u.firstName', ':search'),
                    $qb->expr()->like('u.lastName', ':search'),
                    $qb->expr()->like('u.email', ':search')
                )
            )
            ->setParameter('search', '%' . $searchQuery . '%');
        }

        return $qb->orderBy('u.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Return all users indexed by their ID.
     * @return array<int, User>
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
