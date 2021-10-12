<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bike\Bike_Category;
use App\Models\Bike\Bike_Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $bikeshow = DB::table('bike_categories')
      // ->join('bike_brands','bike_brands.id','=','bike_categories.brand_id')
      // ->select('*')
      // ->where('bike_brands.id',$id)
      // ->get();
  
      // $brands = Bike_Brand::find($id);
  
      // return view('Admin.show',compact('bikeshow','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Bike_Category::create([
          'brand_id'=>$req->brand_id,
          'category_nm'=>$req->category,
        ]);
        return redirect()->back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $bikeshow = DB::table('bike_categories')
      // ->join('bike_brands','bike_categories.brand_id','=','bike_brands.id')
      // ->select('*')
      // // ->where('bike_brands.id',$id)
      // ->get()->toArray();

      $bikeshow = Bike_Category::with(['brands' => function($query) use ($id) {
        $query->where('id',"=",$id);

      }])->whereHas('brands',function($query) use ($id){
        $query->where('id',"=",$id);
      })

      ->get()->toArray();
  
      $brands = Bike_Brand::find($id);
      $category = Bike_Category::find($id);
      // dd($bikeshow);
  
      return view('Admin.show',compact('bikeshow','brands','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // dd($id);
        $destroycategory= Bike_Category::where('id',$id);
        // dd($destroycategory);
        $destroycategory->delete();
        return back();
    }
}
