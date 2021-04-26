<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'price', 'note'
    ];

    public function sendRequest()
    {
        return $this->belongsTo(SendRequest::class, 'customer_id', 'id');
    }
}
