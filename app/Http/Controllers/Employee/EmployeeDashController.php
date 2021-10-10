<?php

namespace App\Http\Controllers\Employee;

use App\Actions\FavoriteCategoryAction;
use App\Actions\ViewPastCustomerAction;
use App\Charts\PopularBikeChart;
use App\Http\Controllers\Controller;
use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Category;
use App\Models\Bike\Bike_Detail;
use App\Models\Payment\Rental;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeDashController extends Controller
{
    public function index(FavoriteCategoryAction $favoriteCategory): View
    {
//        $categories = Bike_Category::all()->toArray();
//        $brands = Bike_Brand::all()->toArray();

//        $models = Rental::with('bike_details')->get()->toArray();

        $chart_donuts = $favoriteCategory->execute();


        return view('Employee.index',compact(['chart_donuts']));
    }
}
