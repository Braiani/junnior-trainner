<?php

namespace App\Http\Controllers;

use App\Services\StaffService;

class PublicPagesController extends Controller
{
    protected $staffService;

    /**
     * PublicPagesController constructor.
     * @param $staffService
     */
    public function __construct(StaffService $staffService)
    {
        $this->staffService = $staffService;
    }


    public function index()
    {
        $staff = $this->staffService->activeStaff();
        return view('welcome', compact('staff'));
    }
}
