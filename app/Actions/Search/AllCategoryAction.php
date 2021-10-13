<?php

namespace App\Actions\Search;

use App\Models\Bike\Bike_Category;

class AllCategoryAction
{
    public function execute()
    {
        return Bike_Category::all();
    }
}
