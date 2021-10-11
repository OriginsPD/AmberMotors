<?php

namespace App\Actions;

use App\Models\Bike\Bike_Detail;
use App\Models\User;

class ToggleActiveAction
{
    public function execute($id): \Illuminate\Http\RedirectResponse
    {
       $status = Bike_Detail::where('id',$id)->value('active_flg');

       if($status){
           Bike_Detail::where('id',$id)->update([
               'active_flg' => 0,
           ]);

           return back();
       }
        Bike_Detail::where('id',$id)->update([
            'active_flg' => 1,
        ]);

       return back();
    }
}
