<?php

namespace Database\Seeders;

use App\Models\AmberPay_log;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        $this->call([
<<<<<<< HEAD
            rolesSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            UserRolesSeeder::class,
            employeeseeder::class,
            BikeDetailSeeder::class,
            // RentalSeeder::class,
          //  RentalSeeder::class,
            // CustomerSeeder::clas
        // CustomerSeeder::class,
        // PenaltySeeder::class
=======
//            rolesSeeder::class,
//            BrandSeeder::class,
//            CategorySeeder::class,
//            UserRolesSeeder::class,
//            employeeseeder::class,
//            BikeDetailSeeder::class,
//            RentalSeeder::class,
//            PenaltySeeder::class,
            AmberPaySeeder::class,
            AmberPaylogSeeder::class,
//            RentalSeeder::class,
//            CustomerSeeder::class,
//            CustomerSeeder::class,

>>>>>>> cb77c4406e0bdce5e6c1b72f0fb8f7253ab58730

        ]);
    }
}
