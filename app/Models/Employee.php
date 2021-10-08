<?php

namespace App\Models;

use App\Models\Payment\Rental;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function setEmployeeNbrAttribute($value)
    {
        return $this->attributes['employee_nbr'] = 'BK-'. (1000 + $value);
    }

}
