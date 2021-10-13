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

    protected $primaryKey = 'employee_id';

    public $timestamps = false;

    protected $fillable = [
        'employee_id',
        'user_id',
        'active_flg',
    ];

    protected $casts = [
        'employee_id' => 'string',
    ];


    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function rentals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rental::class, 'employee_id')->with(['users']);
    }

    public function bike_details(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Bike_Detail::class, 'employee_id', 'employee_id')
            ->with('bike_brands', 'bike_category');
    }

    // public function bike_details(): \Illuminate\Database\Eloquent\Relations\HasMany
    // {
    //     return $this->hasMany(Bike_Detail::class,'employee_nbr','id')
    //         ->with('bike_brands','bike_category');
    // }

    public function setEmployeeNbrAttribute($value): string
    {
        return $this->attributes['employee_id'] = 'BK-' . (1000 + $value);
    }

}
