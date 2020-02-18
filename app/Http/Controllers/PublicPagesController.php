<?php

namespace App\Http\Controllers;

use App\Services\ServicesService;
use App\Services\StaffService;

class PublicPagesController extends Controller
{
    protected $staffService;
    protected $servicesService;

    /**
     * PublicPagesController constructor.
     * @param $staffService
     * @param $servicesService
     */
    public function __construct(StaffService $staffService, ServicesService $servicesService)
    {
        $this->staffService = $staffService;
        $this->servicesService = $servicesService;
    }


    public function index()
    {
        $staff = $this->staffService->activeStaff();
        $services = $this->servicesService->activeServices();
        return view('welcome', compact('staff', 'services'));
    }
}
