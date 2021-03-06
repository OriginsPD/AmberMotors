<?php

namespace App\Models;

use App\Models\Bike\Bike_Detail;
use App\Models\Payment\Rental;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'employee_nbr',
        'user_id',
        'active_flg',
    ];

    protected $casts = [
        'employee_nbr' => 'string',
    ];


    public function rentals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rental::class);
    }

    public function bike_details(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Bike_Detail::class,'employee_nbr','id')
            ->with('bike_brands','bike_category');
    }

    public function setEmployeeNbrAttribute($value): string
    {
        return $this->attributes['employee_nbr'] = 'BK-' . (1000 + $value);
    }

}
