<?php

namespace Database\Seeders;

use App\Models\AmberPay_log;
use App\Models\Payment\Rental;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AmberPaylogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::with(['role_users' => static function($query){
            $query->where('role_id',2);
        }])->whereHas('role_users',static function ($query){
            $query->where('role_id',2);
        })->get()->toArray();

        $rentals = Rental::where('employee_id',11)
            ->where('payment_status',1)
            ->get()->toArray();

        $bike_rent=0;

        foreach ($rentals as $rental){
            ++$bike_rent;
            AmberPay_log::create([
                'employee_id' => 11,
                'rent_id' => $bike_rent,
                'fee_paid' => random_int(15000,25000),
                'percentage_earn' => 0.3,
                'date_logged' => Carbon::yesterday('Jamaica'),
            ]);
        }

    }
}
