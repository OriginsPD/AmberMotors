<?php

namespace Database\Seeders;

use App\Models\Payment\Penalty;
use Illuminate\Database\Seeder;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $bikeIDs = [1, 2, 3, 5, 6, 7, 8];

        foreach ($bikeIDs as $bikeID) {
            Penalty::create([
                'rental_id' => $bikeID,
                'penalty_amount' => random_int(1000,5000),
                'payment_status' => random_int(0,1)
            ]);
        }
    }
}
