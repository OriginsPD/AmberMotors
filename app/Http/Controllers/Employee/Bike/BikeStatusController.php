<?php

namespace App\Http\Controllers\Employee\Bike;

use App\Actions\ViewBikeDetailsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BikeStatusController extends Controller
{
    public function index(ViewBikeDetailsAction $viewBikeDetailsAction): View
    {
        $details = $viewBikeDetailsAction->execute();

        return view('Employee.bike.status.index', compact(['details']));
    }
}
