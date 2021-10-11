<?php

namespace App\Http\Controllers\Employee;

use App\Actions\AddBikeInfoAction;
use App\Actions\AllBrandsAction;
use App\Actions\AllCategoryAction;
use App\Actions\ShowSelectBikeAction;
use App\Actions\ToggleActiveAction;
use App\Actions\UpdateBikeAction;
use App\Actions\ViewBikeDetailsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddBike;
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

    public function show($id, AllBrandsAction $BrandAction,
                         AllCategoryAction $CategoryAction,
                         ShowSelectBikeAction $selectBikeAction)
    {
        $brands = $BrandAction->execute();
        $categories = $CategoryAction->execute();
        $bike_info = $selectBikeAction->execute($id);

        return view('Employee.customer.show',compact(['brands','categories','bike_info']));
    }

    public function update(AddBike $request ,$id, UpdateBikeAction $updateBike): \Illuminate\Http\RedirectResponse
    {
        $updateBike->execute($request ,$id);

        return back()->with('success','Bike Information Update Successfully');
    }

}
