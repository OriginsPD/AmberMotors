<?php

namespace App\Actions\Search;

use App\Models\Bike\Bike_Detail;

class ShowSelectBikeAction
{
    public function execute($id)
    {
        return Bike_Detail::where('id',$id)->first();
    }
}
