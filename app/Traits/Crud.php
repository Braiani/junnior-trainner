<?php


namespace App\Traits;


trait Crud
{
    public function all()
    {
        return $this->model->all();
    }

    public function findAndGet($select = ['*'], $with = [], $where = false)
    {
        return $this->model->when($where, function ($q) use ($where) {
            return $q->where($where['column'], $where['operator'], $where['value']);
        })->select($select)->with($with)->get();
    }
}
