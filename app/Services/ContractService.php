<?php

namespace App\Services;

use App\Repositories\ContractRepository;

class ContractService extends BaseService
{
    protected $contractRepository;

    /**
     * ContractService constructor.
     * @param $contractRepository
     */
    public function __construct(ContractRepository $contractRepository)
    {
        $this->contractRepository = $contractRepository;
    }


}
