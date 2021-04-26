<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $fillable = [
        'name', 'send_request_id'
    ];

    public function sendRequest()
    {
        return $this->belongsTo(SendRequest::class, 'send_request_id', 'id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'invoice_id', 'id');
    }
}
