<?php

namespace App\Service\Criteria\Filter;

use App\Service\Criteria\Contract\FilterInterface;
use Doctrine\Common\Collections\Criteria;

/**
 * Class MinDurationFilter
 *
 * @package App\Service\Criteria\Filter
 */
class MinDurationFilter implements FilterInterface
{
    /**
     * @param Criteria $criteria
     * @param $value
     * @return Criteria
     */
    public function apply(Criteria $criteria, $value): Criteria
    {
        return $criteria
            ->andWhere(Criteria::expr()->gte('duration', $value))
        ;
    }
}
