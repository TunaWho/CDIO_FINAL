<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'account_number', 'user_id'
    ];

    public function account()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
