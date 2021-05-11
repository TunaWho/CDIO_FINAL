<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'address',
        'province_id',
        'district_id',
        'phone',
        'avatar',
        'average_rate',
        'status',
        'user_id',
        'account_balance'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function account()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function acceptRequest()
    {
        return $this->hasOne(AcceptRequest::class, 'partner_id', 'id');
    }

    public function rate()
    {
        return $this->hasMany(Rate::class, 'partner_id', 'id');
    }
}
