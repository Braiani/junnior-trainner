<?php

namespace App\Models;

class Client extends BaseModel
{
    protected $fillable = ['name', 'email', 'birthday', 'gender', 'client_id'];

    protected $casts = [
        'birthday' => 'date'
    ];

    public function indicatedBy()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
