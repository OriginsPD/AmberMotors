<?php

namespace App\Models\Payment;

use App\Models\Bike\Bike_Detail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalModelStats extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'bike_id',
        'total'
    ];

    public function bike_details(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Detail::class,'bike_id');
    }

}
