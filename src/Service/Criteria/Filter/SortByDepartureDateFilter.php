<?php

namespace App\Service\Criteria\Filter;

use App\Service\Criteria\Contract\FilterInterface;
use Doctrine\Common\Collections\Criteria;

/**
 * Class SortByDepartureDateFilter
 *
 * @package App\Service\Criteria\Filter
 */
class SortByDepartureDateFilter implements FilterInterface
{
    /**
     * @param Criteria $criteria
     * @param $value
     * @return Criteria
     */
    public function apply(Criteria $criteria, $value): Criteria
    {
        $value = strtoupper((string)$value);
        $value = in_array($value, [Criteria::ASC, Criteria::DESC]) ? $value : Criteria::ASC;

        return $criteria->orderBy([
            'departureDate' =>  $value
        ]);
    }
}
