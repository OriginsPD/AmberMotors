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
//        $employee_info = Employee::where('user_id',Auth::id())->first();

        Bike_Detail::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'employee_id' => Auth::id(),
            'bike_model' => $request->bike_model,
            'rent_fee' => $request->rent_fee,
        ]);
    }

}
