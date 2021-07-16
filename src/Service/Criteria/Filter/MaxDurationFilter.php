<?php

namespace App\Service\Criteria\Filter;

use App\Service\Criteria\Contract\FilterInterface;
use Doctrine\Common\Collections\Criteria;

/**
 * Class MinPriceFilter
 *
 * @package App\Service\Criteria\Filter
 */
class MaxDurationFilter implements FilterInterface
{
    /**
     * @param Criteria $criteria
     * @param $value
     * @return Criteria
     */
    public function apply(Criteria $criteria, $value): Criteria
    {
        return $criteria
            ->andWhere(Criteria::expr()->lte('duration', $value))
        ;
    }
}
