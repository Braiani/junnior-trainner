<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientAddRequest;
use App\Services\ClientService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class ClientController extends VoyagerBaseController
{
    protected $clientService;

    /**
     * ClientController constructor.
     * @param $clientService
     */
    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }


    public function create(Request $request)
    {
        return $this->clientService->create($request);
    }

    public function storeValidated(ClientAddRequest $request)
    {
        return $this->clientService->store($request->validated());
    }
}
