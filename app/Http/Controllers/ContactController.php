<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    /**
     * ContactController constructor.
     * @param $contactService
     */
    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function store(ContactRequest $request)
    {
        return $this->contactService->store($request->validated());
    }

    public function update(ContactRequest $request, $id)
    {
        return $this->contactService->update($request->validated(), $id);
    }

    public function destroy($id)
    {
        return $this->contactService->destroy($id);
    }
}
