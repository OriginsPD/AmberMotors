<?php

namespace App\Actions;

use App\Models\Bike\Bike_Category;

class AllCategoryAction
{
    public function execute()
    {
        return Bike_Category::all();
    }
}
