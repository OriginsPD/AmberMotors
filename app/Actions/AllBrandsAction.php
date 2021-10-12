<?php

namespace App\Actions;

use App\Models\Bike\Bike_Brand;

class AllBrandsAction
{
    public function execute()
    {
        return Bike_Brand::all();
    }
}
