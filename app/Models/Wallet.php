<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function scopeActive($query, $active)
    {
        return $query->where('id', $active)->pluck('code');
    }

    public function scopeCode($query, $coin)
    {
        return $query->where('id', $coin)->pluck('code');
    }
   
}
