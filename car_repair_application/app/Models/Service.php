<?php

namespace App\Models;

use App\Enums\CarType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price', 'type_car', 'partner_id'
    ];

    public function sendRequest()
    {
        return $this->belongsTo(SendRequest::class, 'customer_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function getCarTypeNameAttribute()
    {
        return CarType::getKey($this->type_car);
    }
}
