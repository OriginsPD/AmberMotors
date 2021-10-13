<?php

namespace App\Actions\View;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ViewClientPenaltyAction
{
    public function execute(): array
    {

        return Rental::with(['employees','users','bike_details','penalties' => static function($query){
            $query->where('penalty_amount','>',0);
        }])->whereHas('penalties', static function($query){
            $query->where('penalty_amount','>',0);
        })
            ->where('employee_id',Auth::id())
            ->get()->toArray();
    }
}
