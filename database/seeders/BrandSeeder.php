<?php

namespace Database\Seeders;

use App\Models\Bike\Bike_Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $brands = [
            'Honda BMW',
            'Indian Hero Electric',
            'TVS Hero Moto Corp',
            'Royal Enfield Yamaha',
            'Mahindra Bajaj',
            'Jawa Motorcycles KTM',
            'Suzuki Revolt Motors',
            'CFMoto Vespa'
        ];

        foreach ($brands as $brand) {
            Bike_Brand::create([
                'brand_nm' => $brand,
            ]);
        }
    }
}
