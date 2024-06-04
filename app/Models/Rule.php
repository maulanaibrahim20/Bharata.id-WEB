<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ['kost_id', 'type', 'rule'];

    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }
}
