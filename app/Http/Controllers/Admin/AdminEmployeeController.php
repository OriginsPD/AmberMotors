<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bike\Bike_Detail;
use App\Models\Payment\Rental;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees = DB::table('users')
      ->join('role_user','role_user.user_id','=','users.id')
      ->select('*')
      ->where('role_user.role_id','=','2')
      ->get();

      return view('Admin.Employee.index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
      $bikeowned = DB::table('bike_details')
      ->join('bike_categories','bike_categories.id','=','bike_details.category_id')
      ->join('bike_brands','bike_brands.id','=','bike_details.brand_id')
      ->join('employees','employees.id','=','bike_details.employee_id')
      ->join('users','users.id','=','employees.user_id')
      ->select('*')
      ->where('users.id',$id)
      ->get();
      // dd($bikeowned);

      // $allsales= DB::table('rentals')
      // ->join('employees','employees.id','=','rentals.employee_id')
      // ->join('users','users.id','=','rentals.id')
      // ->join('bike_details','bike_details.id','=','rentals.bike_id')
      // ->select('*')
      // ->where('payment_status','=',1)
      // ->where('users.id',$id)

      // Rental::with('employees')->where('employee_id',$id)
      // ->get()->toArray();

      $allsales = User::with(['rentals' => function($query) use ($id) {
        $query->where('employee_id',$id);
      }])->whereHas('rentals',function($query) use ($id){
        $query->where('employee_id',$id);
      })
      ->get()->toArray();

      // dd($allsales);
        return view('Admin.Employee.show',compact('bikeowned','allsales'));
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
      $user = User::find($id);
      $user->Active_flag = $request->activate;
      $user->update();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req,$id)
    {
      $user = User::find($id);
      $user->Active_flag = $req->deactivate;
      $user->update();
      return redirect()->back();
    }
}
