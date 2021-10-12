<?php

namespace App\Actions;

use App\Http\Requests\AddBike;
use App\Models\Bike\Bike_Detail;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class AddBikeInfoAction
{
    public function execute(AddBike $request): void
    {

        $filename = $request->bike_model . Auth::id() .".". $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('Bike',$filename,'public');


//        dd($request->bike_model);
        $id = Auth::id();
//        dd($id);
        Bike_Detail::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'employee_id' => $id,
            'bike_model' => $request->bike_model,
            'rent_fee' => $request->rent_fee,
            'image_path' => '/public/Bike/'.$filename
        ]);
    }

}
