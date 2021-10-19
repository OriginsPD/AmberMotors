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

        $users = User::with(['role_users' => static function($query){
            $query->where('role_id',1);
        }])->whereHas('role_users',static function ($query){
            $query->where('role_id',1);
        })->get()->toArray();

        $bikeIDs = 0;


        foreach ($users as $user) {
            ++$bikeIDs;
      Rental::create([
        'user_id' => $user['id'],
        'employee_id' => 11,
        'bike_id' => $bikeIDs,
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
