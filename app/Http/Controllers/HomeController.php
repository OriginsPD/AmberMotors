<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Detail;
use App\Models\Bike\Bike_Category;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Bike_Brand::all()->toArray();
        $categories = Bike_Category::all()->toArray();

        return view('welcome', compact(['brands', 'categories']));
    }

    public function catalogue(): View
    {
        $catalogues = Bike_Detail::with('bike_category')->get()->toArray();
        //        dd($catalogue);
        return view('Home.catalogue', compact(['catalogues']));
    }

    public function brand(): View
    {
        $brands = Bike_Brand::all()->toArray();
        return view('Home.brand', compact(['brands']));
    }

    public function team(): View
    {
        $employees = Employee::with('users')->get()->toArray();
        //        dd($employees);
        return view('Home.team', compact(['employees']));
    }
}
