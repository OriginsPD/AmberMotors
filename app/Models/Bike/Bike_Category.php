<?php

namespace App\Models\Bike;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike_Category extends Model
{
    use HasFactory;

    public $table = 'bike_categories';

    public $timestamps = false;

    protected $fillable = [
        'brand_id',
        'category_nm',
    ];

    public function bike_categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Bike_Detail::class);
    }
}
