<?php

namespace App\Http\Controllers\Employee;

use App\Actions\AddBikeInfoAction;
use App\Actions\ToggleAvailabilityAction;
use App\Actions\ViewBikeDetailsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddBike;
use App\Models\Bike\Bike_Detail;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BikeInfoController extends Controller
{
    public function index(ViewBikeDetailsAction $viewBikeDetailsAction): View
    {
        $details = $viewBikeDetailsAction->execute();

        return view('Employee.bike.index', compact(['details']));
    }

    public function create(): View
    {
        return view('Employee.bike.create');
    }

    public function store(AddBike $request, AddBikeInfoAction $addBikeInfoAction): \Illuminate\Http\RedirectResponse
    {
        $addBikeInfoAction->execute($request);
        return back()->with('success', 'Bike Information Added Successful');
    }

    public function update($id, ToggleAvailabilityAction $ToggleAvailabilityAction): \Illuminate\Http\RedirectResponse
    {
        $ToggleAvailabilityAction->execute($id);
        return back();
    }

}
