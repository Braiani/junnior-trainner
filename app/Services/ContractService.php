<?php

namespace App\Services;

use App\Repositories\ContractRepository;
use TCG\Voyager\Facades\Voyager;

class ContractService extends BaseService
{
    protected $contractRepository;
    private const SLUG = "contracts";

    /**
     * ContractService constructor.
     * @param $contractRepository
     */
    public function __construct(ContractRepository $contractRepository)
    {
        $this->contractRepository = $contractRepository;
    }

    public function checkAuthorizationAndReturnDataType()
    {
        $slug = self::SLUG;
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        return $dataType;
    }

    public function create()
    {
        $dataType = $this->checkAuthorizationAndReturnDataType();

        return view('contracts.add', compact('dataType'));
    }
}
