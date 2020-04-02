<?php

namespace App\Models;

class Contract extends BaseModel
{
    protected $fillable = ['service_id', 'client_id', 'due_date', 'amount', 'installments'];

    protected $dates = ['due_date'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
