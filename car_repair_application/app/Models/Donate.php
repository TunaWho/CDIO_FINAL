<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donate extends Model
{
    use SoftDeletes;

    protected $table = 'Donates';

    protected $fillable = [
        'amounts', 'note', 'partner_id', 'admin_id'
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
