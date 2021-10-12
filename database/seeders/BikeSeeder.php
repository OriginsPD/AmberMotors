<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bike\Bike_Detail;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $randBra = rand(1,5);
        $randCat = rand(1,8);
        Bike_Detail::create([
            'category_id' => $randCat,
            'brand_id' => $randBra,
            'employee_nbr' => 1,
            'bike_model' => 'MB111',
            'rent_fee' => 250,
        ]);
    }
}
