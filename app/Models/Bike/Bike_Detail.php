<?php

namespace App\Models\Bike;

use App\Models\Employee;
use App\Models\Payment\Rental;
use App\Models\RentalModelStats;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bike_Detail extends Model
{
    use HasFactory;

    protected $table = 'bike_details';

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'brand_id',
        'employee_id',
        'bike_model',
        'rent_fee',
        'image_path',
    ];

    public function employees(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function bike_brands(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Brand::class, 'brand_id', 'id');
    }

    public function bike_category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bike_Category::class, 'category_id', 'id');
    }

    public function rentals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rental::class, 'bike_id')->with('users');
    }

    public function rentalmodel_stats(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(RentalModelStats::class,'bike_id');
    }

}
