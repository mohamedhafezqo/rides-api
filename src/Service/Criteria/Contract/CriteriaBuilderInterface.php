<?php

namespace App\Service\Criteria\Contract;

use Doctrine\Common\Collections\Criteria;

/**
 * Interface CriteriaBuilderInterface
 *
 * @package App\Service\Criteria\Contract
 */
interface CriteriaBuilderInterface
{
    /**
     * @param array $filters
     *
     * @return mixed
     */
    public function build(array $filters): Criteria;
}
