<?php

namespace App\Models;

use App\Jobs\SendVerificationEmail;
use App\Traits\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasPermissionsTrait;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    public function scopeSearch($query, string $terms = null)
    {
        collect(str_getcsv($terms, ' ', '"'))->filter()->each(function ($term) use ($query) {
            $term = $term.'%';
            $query->where('name', 'like', $term)
                ->orWhere('total_deposits', 'like', $term)
                ->orWhere('email', 'like', $term)
                ->orWhere('withdrawable_deposits', 'like', $term); 
        });
    }

    public function sendEmailVerificationNotification()
    {
        //dispactches the job to the queue passing it this User object
         SendVerificationEmail::dispatch($this);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function setTotalDepositsAttribute($value)
    {
        $this->attributes['total_deposits'] = $value * 100 ;
    }

    public function getTotalDepositsAttribute($value)
    {
         return $value / 100 ;
    }

    public function setRoiAttribute($value)
    {
        $this->attributes['roi'] = $value * 100 ;
    }

    public function getRoiAttribute($value)
    {
         return $value / 100 ;
    }

    public function setWithrawableDepositsAttribute($value)
    {
        $this->attributes['withdrawable_deposits'] = $value * 100 ;
    }

    public function getWithrawableDepositsAttribute($value)
    {
         return $value / 100 ;
    }

}