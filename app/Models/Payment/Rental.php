<?php

namespace App\Models\Payment;

use App\Models\Bike\Bike_Detail;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'employee_nbr',
        'bike_id',
        'payment_fee',
        'payment_status',
        'rent_status',
        'rental_start_date',
        'rental_end_date',
        'return_date',
    ];

//    protected $hidden = [
//        'user_id'
//    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function employees(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function bike_details(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Detail::class);
    }

    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function penalties(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Penalty::class);
    }
}
