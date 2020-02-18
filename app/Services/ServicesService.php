<?php


namespace App\Services;


use App\Repositories\ServiceRepository;

class ServicesService
{
    protected $serviceRepository;

    /**
     * ServicesService constructor.
     * @param $serviceRepository
     */
    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function allServices()
    {
        return $this->serviceRepository->all();
    }

    public function activeServices()
    {
        return $this->serviceRepository->active();
    }
}
