<?php

namespace App\Actions;

use App\Models\Bike\Bike_Detail;
use App\Models\User;

class ToggleAvailabilityAction
{
    public function execute($id): \Illuminate\Http\RedirectResponse
    {
       $status = Bike_Detail::where('id',$id)->value('availability');

       if($status){
           Bike_Detail::where('id',$id)->update([
               'availability' => 0,
           ]);

           return back();
       }
        Bike_Detail::where('id',$id)->update([
            'availability' => 1,
        ]);

       return back();
    }
}
