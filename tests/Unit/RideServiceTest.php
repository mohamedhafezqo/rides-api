<?php

namespace App\Test\Unit\Formatter;

use App\Repository\RideRepository;
use App\Service\Criteria\CriteriaBuilder;
use App\Service\Criteria\FilterFactory;
use App\Service\RideService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RideServiceTest extends WebTestCase
{
    public function testFindBy()
    {
        $criteriaBuilder = new CriteriaBuilder(new FilterFactory());
        $repository = $this->createMock(RideRepository::class);
        $repository
            ->expects($this->once())
            ->method('findBy')
            ->willReturn([])
        ;
        $rideService = new RideService($repository, $criteriaBuilder);

        $this->assertIsArray($rideService->findBy([]));
    }
}
