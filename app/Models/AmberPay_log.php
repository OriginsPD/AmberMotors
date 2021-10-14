<?php

namespace App\Models;

use App\Models\Payment\Rental;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmberPay_log extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'rent_id',
        'employee_id',
        'fee_paid',
        'percentage_earn',
        'date_logged',
    ];

    public function employee(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function rental(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Rental::class,'rent_id')->with('users');
    }
}
