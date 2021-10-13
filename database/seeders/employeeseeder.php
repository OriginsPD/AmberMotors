<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\Models\Employee;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $employee = DB::table('users')
      ->join('role_user','role_user.user_id','=','users.id')
      ->select('*')
      ->where('role_user.role_id','=','2')
      ->get();

      foreach($employee as $employ){
        Employee::create([
          'employee_nbr'=>rand(1,90),
          'user_id'=>$employ->id,
          'active_flg'=>rand(0,1),
        ]);
      }
    }
}
