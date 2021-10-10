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
//        $rental = [
//            'user_id',
//            'employee_nbr',
//            'bike_id',
//            'payment_fee',
//            'payment_status',
//            'rent_status',
//            'rental_start_date',
//            'rental_end_date',
//            'return_date',
//        ];

        $users = User::all()->toArray();
        $bikeID = [1,2,3,4,5,6,7,8,9,10];

        foreach ($users as $user){
        Rental::create([
            'user_id' => $bikeID[$users[0]['id']],
            'employee_id' => 1,
            'bike_id' => $bikeID[$users[0]['id']],
            'payment_fee' => 5000,
            'payment_status' => random_int(0,1),
            'rent_status' => random_int(0,1),
            'rental_start_date' => Carbon::today('Jamaica'),
            'rental_end_date' => Carbon::tomorrow('Jamaica'),
            'return_date' => Carbon::tomorrow('Jamaica'),
        ]);
    }

    }
}
