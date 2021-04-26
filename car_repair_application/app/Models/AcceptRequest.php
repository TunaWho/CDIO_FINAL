<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcceptRequest extends Model
{
    protected $fillable = [
        'send_request_id', 'accept', 'partner_id'
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function sendRequest()
    {
        return $this->belongsTo(SendRequest::class, 'send_request_id', 'id');
    }
}
