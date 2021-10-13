<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmberPay extends Model
{
    use HasFactory;

    public $timestamps =false;

    protected $fillable = [
        'user_id',
        'accumulate_amt',
        'update_on',
    ];

    protected $casts = [
        'update_on' => 'date',
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
