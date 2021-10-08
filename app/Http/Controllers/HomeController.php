<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function catalogue(): View
    {
        return view('Home.catalogue');
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
