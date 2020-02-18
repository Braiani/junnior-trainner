<?php


namespace App\Repositories;


use App\Models\Service;

class ServiceRepository extends BaseRepository
{
    protected $model;

    /**
     * ServiceRepository constructor.
     * @param $model
     */
    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function active($active = true)
    {
        $where = [
            'column' => 'active',
            'operator' => '=',
            'value' => $active
        ];
        return $this->findAndGet(['*'], [], $where);
    }
}
