<?php

namespace App\Actions\View;

use App\Models\Bike\Bike_Detail;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class ViewBikeDetailsAction
{
    public function execute()
    {
        $details = Employee::with('bike_details')
            ->where('user_id',Auth::id())
            ->get()->toArray();

        return $details[0]['bike_details'];
    }
}
