<?php

namespace App\Repository;

use App\Entity\Ride;
use App\Repository\Contract\RepositoryInterface;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Class RideRepository
 *
 * @package App\Repository
 */
class RideRepository implements RepositoryInterface
{
    private EntityManagerInterface $entityManager;
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $this->entityManager->getRepository(Ride::class);
    }

    /**
     * @param Criteria $criteria
     *
     * @return array
     */
    public function findBy(Criteria $criteria): array
    {
        return $this->repository
            ->createQueryBuilder('r')
            ->addCriteria($criteria)
            ->getQuery()
            ->getResult()
        ;
    }
}
