<?php

namespace App\Repository\Contract;

use Doctrine\Common\Collections\Criteria;

/**
 * Interface RepositoryInterface
 *
 * @package App\Repository\Contract
 */
interface RepositoryInterface
{
    /**
     * @param $criteria
     *
     * @return array
     */
    public function findBy(Criteria $criteria): array;
}
