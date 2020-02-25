<?php

namespace App\Models;

class Client extends BaseModel
{
    protected $fillable = ['name', 'email', 'birthday', 'gender', 'client_id'];

    public function indicatedBy()
    {
        return $this->hasOne(Client::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
