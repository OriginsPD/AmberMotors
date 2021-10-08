<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BikeInfoController extends Controller
{
    public function index()
    {
        return view('Employee.bike.index');
    }

}
