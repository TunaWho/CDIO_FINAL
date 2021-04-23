<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'avatar', 'average_rate', 'status', 'user_id', 'account_balance'
    ];

    public function account()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
