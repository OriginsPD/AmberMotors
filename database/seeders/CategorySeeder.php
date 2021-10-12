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
    public function run(): void
    {
        $categorys = [
            'Commuter.',
            'Cruiser.',
            'Moped.',
            'Naked.',
            'OffRoad.',
            'Scooter.',
            'Sports.'
        ];

        foreach ($categorys as $category) {
            Bike_Category::create([
                'category_nm' => $category,
            ]);
        }
    }
}
