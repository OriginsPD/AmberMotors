<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand;
use App\Models\Bike\Bike_Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
  public function index(): View
  {
    $brands=Bike_Brand::all();

    return view('Admin.index',['brands'=>$brands]);
  }

  public function create(Brand $request)
  {
      Bike_Brand::create([
        'brand_nm'=> $request->brand
      ]);
      return redirect()->route('Admin.index');
  }

  // public function edit(Brand $request,$id){

  //   $brandsupdate = Bike_Brand::find($id);

  //   $brandsupdate->update();

  // }

  public function destroy($id){
$branddestroy = Bike_Brand::find($id);
$branddestroy->delete();

return redirect()->route('Admin.index');

  }
}
