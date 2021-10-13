<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment\Rental;
use App\Models\User;
use App\Models\Role;
use App\Models\role_user;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
      // $buyers = Role::with('users')->get()->toArray();
      // dd($buyers[0]['users'][0]['pivot']['role_id']);
      $buyers = DB::table('users')
      ->join('role_user','role_user.user_id','=','users.id')
      ->select('*')
      ->where('role_user.role_id','=','1')
      ->get();

      return view('Admin.Users.index',['buyers'=>$buyers]);
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
      $customerrental = DB::table('rentals')
      ->join('users','users.id','=','rentals.user_id')
      ->join('employees','employees.id','=','rentals.employee_id')
      ->join('bike_details','bike_details.id','=','rentals.bike_id')
      ->select('*') 
      ->where('rentals.user_id',$id)
      ->get();

      // $customerrental = Rental::with('users')->where('user_id',$id)->get();

      // dd($customerrental);


        return view('Admin.Users.show',['customerrental'=>$customerrental]);
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
    public function update(Request $req, $id)
    {
      $user = User::find($id);
      $user->Active_flag = $req->activate;
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
