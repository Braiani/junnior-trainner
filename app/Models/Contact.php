<?php

namespace App\Models;

class Contact extends BaseModel
{
    protected $fillable = ['number', 'whatsapp', 'instagram', 'client_id'];

    protected $casts = [
        'whatsapp' => 'boolean'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
