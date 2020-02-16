<?php


namespace App\Services;


use App\Repositories\StaffRepository;

class StaffService
{
    protected $staffRepository;

    /**
     * StaffService constructor.
     * @param $staffRepository
     */
    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }


    public function allStaff()
    {
        return $this->staffRepository->all();
    }
}
