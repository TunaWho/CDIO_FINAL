<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'avatar', 'user_id'
    ];

    public function account()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
