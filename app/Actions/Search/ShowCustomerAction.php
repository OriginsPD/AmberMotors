<?php

namespace App\Actions\Search;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ShowCustomerAction
{
    public function execute($id): array
    {

         return Rental::with(['employees','users','bike_details','penalties' => static function($query){
            $query->where('penalty_amount','>',0);
        }])
            ->where('employee_id',Auth::id())
            ->where('id',$id)
            ->get()->toArray();

    }
}
