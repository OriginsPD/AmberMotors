<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand;
use App\Models\Bike\Bike_Brand;
use App\Models\Bike\Bike_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
  public function index(): View
  {
    $brands = Bike_Brand::all();
    return view('Admin.index', ['brands' => $brands]);
  }

  public function create(Brand $request)
  {
    Bike_Brand::create([
      'brand_nm' => $request->brand
    ]);
    return redirect()->route('Admin.index');
  }

  public function edit(Brand $request, $id)
  {

    $categoryupdate = Bike_Category::find($id);
    $categoryupdate->update();
  }

  public function destroy($id)
  {
    $branddestroy = Bike_Brand::find($id);
    $branddestroy->delete();

    return redirect()->route('Admin.index');
  }

  public function show($id)
  {
    $bikeshow=DB::table('bike_categories')
    ->join('bike_brands','bike_brands.id','=','bike_categories.brand_id')
    ->select('*')
    ->where('bike_brands.id',$id)
    ->get();

    $brands = Bike_Brand::find($id);

    return view('Admin.show',compact('bikeshow','brands'));
  }
}
