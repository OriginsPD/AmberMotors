<?php

namespace Database\Seeders;

use App\Models\Bike\Bike_Detail;
use App\Models\Payment\Rental;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Str;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {


        $bikeIDs = [1,2,3,4,5];


      foreach ($bikeIDs as $bikeID){

      Rental::create([
        'user_id' => $bikeID,
        'employee_id' => 1,
        'bike_id' => $bikeID,
        'payment_fee' => random_int(1000,8000),
        'payment_status' => random_int(0,1),
        'rent_status' => random_int(0,1),
        'rental_start_date' => Carbon::today('Jamaica'),
        'rental_end_date' => Carbon::tomorrow('Jamaica'),
        'return_date' => Carbon::parse('this sunday')->toDateString(),
      ]);


    }
}
}
