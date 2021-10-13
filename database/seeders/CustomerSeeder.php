<?php

namespace Database\Seeders;

use App\Models\role_user;
use App\Models\User;
use Illuminate\Database\Seeder;
use Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $customers = [2,3,4,5,6];

       foreach ($customers as $customer){
           User::create([
               'name' => Str::random(6)." ".Str::random(5),
               'email' => Str::random(8).'@gmail.com',
               'password' => bcrypt('password123'),
               'address' => Str::random(15),
               'phone_nbr' => 8763334444,
           ]);

           role_user::create([
               'user_id' => $customer,
               'role_id' => 1,
           ]);
       }
    }
}
