<?php

namespace Database\Seeders;

use App\Models\AmberPay;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;

class AmberPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $users = User::with(['role_users' => static function($query){
            $query->where('role_id',2);
        }])->whereHas('role_users',static function ($query){
            $query->where('role_id',2);
        })->get()->toArray();

        foreach ($users as $user){
            AmberPay::create([
                'user_id' => $user['id'],
                'accumulate_amt' => random_int(10000,20000),
                'update_on' => Carbon::today('Jamaica'),
            ]);
        }
    }
}
