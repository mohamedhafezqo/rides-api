<?php

namespace App\Controller;

use App\Service\Contract\RideServiceInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Class RideController
 *
 * @Rest\Route("/api")
 * @package App\Controller
 */
class RideController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/rides")
     *
     * @Rest\QueryParam(name="sortByDepartureDate", requirements="ASC|DESC", description="Sort Rides By DepartureDate.")
     * @Rest\QueryParam(name="maxPrice", requirements="\d+", description="Maximum Ride Price.")
     * @Rest\QueryParam(name="minPrice", requirements="\d+", description="Minimum Ride Price.")
     * @Rest\QueryParam(name="maxDuration", requirements="\d+", description="Maximum Ride Duration.")
     * @Rest\QueryParam(name="minDuration", requirements="\d+", description="Minimum Ride Duration.")
     *
     * @param Request $request
     * @param RideServiceInterface $roomFacade
     *
     * @return Response
     */
    public function index(Request $request, RideServiceInterface $rideService)
    {
        $results = $rideService->findBy($request->query->all());

        $view = $this->view(['rides' => $results], Response::HTTP_OK);

        return $this->handleView($view);
    }
}
