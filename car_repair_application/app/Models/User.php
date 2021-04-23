<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'role_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'user_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id', 'id');
    }
}