<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendRequest extends Model
{
    protected $fillable = [
        'service_name', 'address', 'note', 'total', 'service_id', 'customer_id', 'partner_id'
    ];

    public function acceptRequest()
    {
        return $this->hasOne(AcceptRequest::class, 'send_request_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function invoice()
    {
        return $this->hasOne(invoice::class, 'send_request_id', 'id');
    }

    public function service()
    {
        return $this->hasMany(Service::class, 'service_id', 'id');
    }
}
