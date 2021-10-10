<?php

namespace App\Models;

use App\Models\Payment\Payment;
use App\Models\Payment\Penalty;
use App\Models\Payment\Rental;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_nbr',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    Password Mutator
    public function setPasswordAttribute($value): string
    {
        return $this->attributes['password'] = bcrypt($value);
    }


    public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

//    public function hasAnyRole($role): bool
//    {
//        return null !== $this->role()->where('name', $role)->first();
//    }


    public function rentals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rental::class);
    }


}
