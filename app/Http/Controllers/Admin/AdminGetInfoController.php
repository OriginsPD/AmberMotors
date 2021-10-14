<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

      $allrentals = Rental::with('bike_details','users','employees')->where('id',$id)->get();
      return response()->json([
        'success'=>$allrentals
      ]);
   } 
}
