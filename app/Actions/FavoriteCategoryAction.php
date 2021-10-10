<?php

namespace App\Actions;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class FavoriteCategoryAction
{
    public function execute()
    {
        $categories = Rental::with('employees', 'users', 'bike_details')
            ->where('employee_id', Auth::id())
            ->get()->toArray();


        foreach ($categories as $category)
        {
            $chart[] = $category['bike_details']['bike_model'];
        }
        return array_unique($chart);
    }
}
