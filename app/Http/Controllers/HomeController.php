<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Category;
use App\Models\Bike\Bike_Detail;


class HomeController extends Controller
{
    public function catalogue(): View
    {
        return view('Home.catalogue');
    }

    public function brand(): View
    {
        $categories = Bike_Category::all()->toArray();
        $brands = Bike_Brand::all()->toArray();
        $bikes = Bike_Detail::all();
        return view('Home.brand',compact(['categories','brands','bikes']));
    }

    public function team(): View
    {
        return view('Home.team');
    }
}
