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
     */
    public function run()
    {

      foreach (User::all() as $user){
      role_user::create([
        'user_id'=>$user->id,
        'role_id'=>rand(1,3),
      ]);
      }
    }
}
