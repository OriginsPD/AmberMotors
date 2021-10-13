<?php

namespace Database\Seeders;

use App\Models\AmberPay_log;
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

        foreach ($users as $user){
            AmberPay_log::create([
                'user_id' => $user['id'],
                'fee_paid' => 5000,
                'percentage_earn' => 0.3,
                'date_logged' => Carbon::today('Jamaica'),
            ]);
        }

    }
}
