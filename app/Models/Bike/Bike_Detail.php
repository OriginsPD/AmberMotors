<?php

namespace App\Models\Bike;

use App\Models\Payment\Rental;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike_Detail extends Model
{
    use HasFactory;

    public $table = 'bike_details';

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'brand_id',
        'employee_nbr',
        'bike_model',
        'rent_fee',
    ];

    public function bike_brands(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Brand::class);
    }

    public function bike_category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Category::class);
    }

    public function rentals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rental::class);
    }

}
