<?php


namespace App\Repositories;


use App\Models\Client;

class ClientRepository extends BaseRepository
{
    protected $model;

    /**
     * ClientRepository constructor.
     * @param $model
     */
    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function saveContactRelation(Client $client, array $data)
    {
        return $client->contacts()->createMany($data);
    }
}
