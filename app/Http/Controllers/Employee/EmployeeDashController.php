<?php

namespace App\Http\Controllers\Employee;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EmployeeDashController extends Controller
{
    public function index(): View
    {
//        $categories = Bike_Category::all()->toArray();
//        $brands = Bike_Brand::all()->toArray();

//        $models = Rental::with('bike_details')->get()->toArray();


        return view('Employee.index');
    }
}
