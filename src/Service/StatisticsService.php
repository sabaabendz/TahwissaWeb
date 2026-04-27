<?php

namespace App\Service;

use App\Repository\UserRepository;

class StatisticsService
{
    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    /**
     * @return array{total:int,active:int,inactive:int,byRole:array{USER:int,AGENT:int,ADMIN:int,UNASSIGNED:int}}
     */
    public function getUserDashboardStatistics(): array
    {
        return $this->userRepository->getGlobalStatistics();
    }

    /**
     * @return array<int, \App\Entity\User>
     */
    public function getLatestRegisteredUsers(int $limit = 5): array
    {
        return $this->userRepository->findLatestRegisteredUsers($limit);
    }
}
