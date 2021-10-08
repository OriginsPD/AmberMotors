<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeDashController extends Controller
{
    public function index(): View
    {
        return view('Employee.index');
    }
}
