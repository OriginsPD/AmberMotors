<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeDashController extends Controller
{
    public function index(): View
    {
        $categories = Bike_Category::all()->toArray();
        $brands = Bike_Brand::all()->toArray();
        return view('Employee.index',compact(['categories','brands']));
    }
}
