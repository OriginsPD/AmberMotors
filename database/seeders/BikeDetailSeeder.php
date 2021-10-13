<?php

namespace Database\Seeders;

use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Detail;
use Illuminate\Database\Seeder;

class BikeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $models= ['A1','A2','A3','A4','A5'];
        $bikedetails= Bike_Detail::with('bike_brands','employees','bike_category')->get();
        // dd($bikedetails);
        foreach($bikedetails as $bike){
        Bike_Detail::create([
          'category_id'=>$bike->category_id,
          'brand_id'=>$bike->brand_id,
          'employee_nbr'=>$bike->employee_nbr,
          'bike_model'=>'A1',
          'rent_fee'=>rand(5000,8000),
          'availability'=>rand(0,1),
        ]);
      }
    }
}
