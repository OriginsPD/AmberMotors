<?php

namespace App\Actions\View;

use App\Models\Employee;
use App\Models\Bike\Bike_Detail;
use Illuminate\Support\Facades\Auth;

class ViewBikeDetailsAction
{
    public function execute()
    {
        $details = Employee::with('bike_details')
            ->where('user_id', Auth::id())
            ->get()->toArray();

        // dd($details);

        return $details[0]['bike_details'];
    }
}
