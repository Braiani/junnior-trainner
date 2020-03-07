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

    public function findById($id, $select = ['*'], $with = [])
    {
        return $this->model->where('id', $id)
                ->select($select)->with($with)->first();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->findById($id)->update($data);
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}
