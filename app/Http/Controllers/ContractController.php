<?php

namespace App\Http\Controllers;

use App\Services\ContractService;
use Illuminate\Http\Request;

class ContractController extends Controller
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


}
