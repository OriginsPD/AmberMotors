<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bike\Bike_Category;

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
      'Enduro',
      'Cruiser',
      'Off-road',
      'Road bike',
      'Sport bike',
      'Dual-sport',
      'Super-Motor',
      'Muscle bike',
      'Power cruiser',
      'Mountain bikes',
      'TVS Hero Motor Corp',
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
      ]);
    }
  }
}
