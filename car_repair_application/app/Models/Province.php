<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
