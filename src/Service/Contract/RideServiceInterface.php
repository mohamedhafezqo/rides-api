<?php

namespace App\Service\Contract;

/**
 * Interface RideServiceInterface
 *
 * @package App\Service\Contract
 */
interface RideServiceInterface
{
    /**
     * @param array $criteria
     *
     * @return mixed
     */
    public function findBy(array $criteria): array;
}
