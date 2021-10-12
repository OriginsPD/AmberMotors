<?php

namespace App\Actions;

use App\Models\Bike\Bike_Detail;

class ShowSelectBikeAction
{
    public function execute($id)
    {
        return Bike_Detail::where('id',$id)->first();
    }
}
