<?php


namespace App\Repositories;


use App\Models\Contact;

class ContactRepository extends BaseRepository
{
    protected $model;

    /**
     * ContactRepository constructor.
     * @param $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}
