<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmberPay_log extends Model
{
    use HasFactory;

    public $timestamps =false;

    protected $fillable = [
        'user_id',
        'fee_paid',
        'percentage_earn',
        'date_logged',
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
