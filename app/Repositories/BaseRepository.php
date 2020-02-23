<?php


namespace App\Repositories;


use App\Traits\Active;
use App\Traits\Crud;

class BaseRepository
{
    use Crud, Active;
}
