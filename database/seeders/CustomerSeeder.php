<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\Models\Employee;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customers = DB::table('users')
      ->join('role_user','role_user.user_id','=','users.id')
      ->select('*')
      ->where('role_user.role_id','=','1')
      ->get();

      foreach($customers as $customer){
        Employee::create([
          'employee_nbr'=>rand(1,90),
          'user_id'=>$customer->id,
          'active_flag'=>rand(0,1),

        ]);
      }
    
    }
}
