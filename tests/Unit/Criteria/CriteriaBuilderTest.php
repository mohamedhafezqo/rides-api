<?php

namespace App\Test\Unit\Criteria;

use App\Service\Criteria\CriteriaBuilder;
use App\Service\Criteria\FilterFactory;
use PHPUnit\Framework\TestCase;

class CriteriaBuilderTest extends TestCase
{
    public function testBuildReturn()
    {
        $filterFactory = new FilterFactory();
        $criteriaBuilder = new CriteriaBuilder($filterFactory);
        $criteria = $criteriaBuilder->build([
            'maxPrice' => 90,
            'minPrice' => 30,
            'midDuration' => 30,
            'maxDuration' => 50,
            'sortByDepartureDate' => 'asc',
        ]);

        $this->assertCount(1, $criteria->getOrderings());
    }
}
