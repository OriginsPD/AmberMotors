<?php

namespace Database\Seeders;

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
            rolesSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            UserRolesSeeder::class,
            employeeseeder::class,
            BikeDetailSeeder::class,
            RentalSeeder::class,
          //  RentalSeeder::class,
            // CustomerSeeder::clas
        // CustomerSeeder::class,
        // PenaltySeeder::class

        ]);
    }
}
