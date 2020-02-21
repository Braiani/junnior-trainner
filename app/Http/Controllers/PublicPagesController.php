<?php

namespace App\Http\Controllers;

use App\Services\CommentService;
use App\Services\ServicesService;
use App\Services\StaffService;

class PublicPagesController extends Controller
{
    protected $staffService;
    protected $servicesService;
    protected $commentsService;

    /**
     * PublicPagesController constructor.
     * @param $staffService
     * @param $servicesService
     * @param $commentsService
     */
    public function __construct(StaffService $staffService, ServicesService $servicesService, CommentService $commentsService)
    {
        $this->staffService = $staffService;
        $this->servicesService = $servicesService;
        $this->commentsService = $commentsService;
    }


    public function index()
    {
        $staff = $this->staffService->activeStaff();
        $services = $this->servicesService->activeServices();
        $comments = $this->commentsService->activeComments();
        return view('welcome', compact('staff', 'services', 'comments'));
    }
}
