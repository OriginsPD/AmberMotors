<?php

namespace App\Actions\View;

use App\Models\Payment\RentalModelStats;
use Illuminate\Support\Facades\Auth;

class ViewRentalStatsAction
{
    public function execute()
    {
        return RentalModelStats::where('employee_id',Auth::id())
            ->get()->toJson();
    }
}
