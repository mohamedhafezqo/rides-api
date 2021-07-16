<?php

namespace App\Test\Unit\Criteria;

use App\Service\Criteria\Contract\FilterInterface;
use App\Service\Criteria\FilterFactory;
use PHPUnit\Framework\TestCase;

class FilterFactoryTest extends TestCase
{
    public function testCreatingFilters()
    {
        $filterFactory = new FilterFactory();

        $this->assertInstanceOf(FilterInterface::class,
            $filterFactory->create('minPrice')
        );
        $this->assertInstanceOf(FilterInterface::class,
            $filterFactory->create('maxPrice')
        );
        $this->assertInstanceOf(FilterInterface::class,
            $filterFactory->create('minDuration')
        );
        $this->assertInstanceOf(FilterInterface::class,
            $filterFactory->create('maxDuration')
        );
        $this->assertInstanceOf(FilterInterface::class,
            $filterFactory->create('sortByDepartureDate')
        );
    }
}
