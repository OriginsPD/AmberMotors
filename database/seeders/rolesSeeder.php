<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Customer','Seller','Admin'];

        foreach ($roles as $role){
            Role::create([
                'role_nm' => $role,
                'description' => 'Some Description of Role '.$role,
            ]);
        }
    }
}
