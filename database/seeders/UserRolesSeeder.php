<?php

namespace Database\Seeders;

use App\Models\role_user;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {

      foreach (User::all() as $user){

      role_user::create([
        'user_id'=>$user->id,
        'role_id'=>random_int(1,3),
      ]);

      }
    }
}
