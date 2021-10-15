<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment\Rental;
use Illuminate\Http\Request;

class AdminGetInfoController extends Controller
{
    
    /**
     * Get user info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getInfo($id){

      $allrental = Rental::with('bike_details','users','employees')->where('id',$id)->get();
      // dd($allrentals);
      return response()->json([
        'success'=>$allrental
      ]);
   } 
}
