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

    public function show(Request $request, $id)
    {
        return $this->clientService->show($request, $id);
    }


    public function create(Request $request)
    {
        return $this->clientService->create($request);
    }

    public function edit(Request $request, $id)
    {
        return $this->clientService->edit($request, $id);
    }

    public function storeValidated(ClientAddRequest $request)
    {
        return $this->clientService->store($request->validated());
    }

    public function updateValidated(ClientAddRequest $request, $id)
    {
        return $this->clientService->update($request->validated(), $id);
    }
}
