<?php


namespace App\Repositories;


use App\Models\Contract;

class ContractRepository extends BaseRepository
{
    protected $model;

    /**
     * ContractRepository constructor.
     * @param $model
     */
    public function __construct(Contract $model)
    {
        $this->model = $model;
    }


}
