<?php

namespace App\Http\Controllers;

use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Category;
use App\Models\Bike\Bike_Detail;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
         $brands = Bike_Brand::all()->toArray();
         $categories = Bike_Category::all()->toArray();

         return view('welcome',compact(['brands','categories']));
    }

    public function catalogue(): View
    {
        $catalogues = Bike_Detail::with('bike_category')->get()->toArray();
//        dd($catalogue);
        return view('Home.catalogue',compact(['catalogues']));
    }

    public function brand(): View
    {
        return view('Home.brand');
    }

    public function team(): View
    {
        return view('Home.team');
    }
}
