<?php

namespace Database\Seeders;

use App\Models\Bike\Bike_Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = [
            'Road bikes',
            'Mountain bikes',
            'TVS Hero Moto Corp',
            'Hybrid/commuter bikes',
            'Cyclocross bikes'
        ];

        $brand = [
          'BMW',
          'Mitsubishi',
          'Honda',
          'Toyota',
          'Nissan',
        ];

        foreach ($categorys as $category) {

          Bike_Category::create([
            'category_nm' => $category,
            'brand_id'=>rand(1,8),  
          ]);
        }
      
    }
}
