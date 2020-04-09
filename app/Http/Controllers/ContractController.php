<?php

namespace App\Http\Controllers;

use App\Services\ContractService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class ContractController extends VoyagerBaseController
{
    protected $contractService;

    /**
     * ContractController constructor.
     * @param $contractService
     */
    public function __construct(ContractService $contractService)
    {
        $this->contractService = $contractService;
    }

    public function create(Request $request)
    {
        return $this->contractService->create();
    }

    public function store(Request $request)
    {
        return $request;
    }


}
