<?php

namespace App\Actions;

use App\Http\Requests\AddBike;
use App\Models\Bike\Bike_Detail;
use Illuminate\Support\Facades\Auth;

class UpdateBikeAction
{
    public function execute(AddBike $request ,$id): void
    {
        $filename = $request->bike_model . Auth::id() .".". $request->file('image')
                ->getClientOriginalExtension();

        $request->file('image')
            ->storeAs('Bike',$filename,'public');

        Bike_Detail::where('id',$id)
            ->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'employee_id' => Auth::id(),
                'bike_model' => $request->bike_model,
                'rent_fee' => $request->rent_fee,
                'image_path' => '/public/Bike/'.$filename
            ]);
    }

}
