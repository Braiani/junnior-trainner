<?php


namespace App\Traits;


trait Crud
{
    public function all()
    {
        return $this->model->all();
    }
}
