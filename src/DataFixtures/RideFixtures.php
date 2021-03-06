<?php

namespace App\DataFixtures;

use App\Entity\Ride;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class RideFixtures extends BaseFixtures
{
    private $faker;
    private const GENERATE_COUNT = 30;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Ride::class, self::GENERATE_COUNT, function(Ride $ride) {

            $departureAt = $this->faker->dateTimeThisMonth('+10 days');
            $arrivalDate = clone $departureAt;
            $duration = $this->faker->numberBetween(5, 60);

            $ride->setDuration($duration)
                ->setPrice($this->faker->randomFloat(2, 2.5, 150.5))
                ->setSource($this->faker->city)
                ->setDestination($this->faker->city)
                ->setDepartureDate($departureAt)
                ->setArrivalDate($arrivalDate->add(new \DateInterval('PT' . $duration . 'M')))
            ;
        });

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
