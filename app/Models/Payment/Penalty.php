<?php

namespace App\Models\Payment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penalty extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'rental_id',
        'penalty_amount',
        'payment_status',
    ];


    public function rentals(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Rental::class);
    }
}
