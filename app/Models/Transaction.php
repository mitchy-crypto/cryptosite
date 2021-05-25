<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, string $terms = null)
    {
        collect(str_getcsv($terms, ' ', '"'))->filter()->each(function ($term) use($query) {
            $term = $term.'%';
            $query->where(function ($query) use($term){
                $query->where('currency', 'like', $term)
                    ->orWhere('roi', 'like', $term)
                    ->orWhere('type', 'like', $term)
                    ->orWhereIn('user_id', User::query()
                        ->where('name', 'like', $term)
                        ->pluck('id')
                );
            });
        }); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value * 100 ;
    }

    public function getAmountAttribute($value)
    {
         return $value / 100 ;
    }

    public function setRoiAttribute($value)
    {
        $this->attributes['amount'] = $value * 100 ;
    }

    public function getRoiAttribute($value)
    {
         return $value / 100 ;
    }
}
