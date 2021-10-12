<?php

namespace App\Actions;

use App\Models\Employee;
use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ViewCurrentCustomerAction
{
    public function execute(): array
    {
        //        dd($customers);
        return Rental::with('employees','users','bike_details')
            ->where('employee_id',Auth::id())
            ->where('rent_status',1)
            ->get()->toArray();
    }
}
