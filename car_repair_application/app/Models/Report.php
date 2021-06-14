<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'invoice_id', 'type_report'
    ];

    public function invoice()
    {
        return $this->belongsTo(invoice::class, 'invoice_id', 'id');
    }
}
