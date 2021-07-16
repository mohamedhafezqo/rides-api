<?php

namespace App\Service;

use App\Repository\Contract\RepositoryInterface;
use App\Service\Contract\RideServiceInterface;
use App\Service\Criteria\Contract\CriteriaBuilderInterface;

/**
 * Class RideService
 *
 * @package App\Service
 */
class RideService implements RideServiceInterface
{
    /**
     * @var RepositoryInterface
     */
    private RepositoryInterface $repository;
    private CriteriaBuilderInterface $criteriaBuilder;

    /**
     * RideService constructor.
     *
     * @param RepositoryInterface            $repository
     * @param CriteriaBuilderInterface $criteriaBuilder
     */
    public function __construct(RepositoryInterface $repository, CriteriaBuilderInterface $criteriaBuilder)
    {
        $this->repository = $repository;
        $this->criteriaBuilder = $criteriaBuilder;
    }

    /**
     * @param array $filters
     *
     * @return array
     */
    public function findBy(array $filters): array
    {
        $criteria = $this->criteriaBuilder->build($filters);

        return $this->repository->findBy($criteria);
    }
}
