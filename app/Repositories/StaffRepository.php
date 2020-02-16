<?php


namespace App\Repositories;


use App\Models\Staff;

class StaffRepository extends BaseRepository
{
    protected $model;

    /**
     * StaffRepository constructor.
     * @param Staff $model
     */
    public function __construct(Staff $model)
    {
        $this->model = $model;
    }

}
