<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value * 100 ;
    }

    public function getAmountAttribute($value)
    {
         return $value / 100 ;
    }
}
