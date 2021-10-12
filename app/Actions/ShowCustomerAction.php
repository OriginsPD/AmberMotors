<?php

namespace App\Actions;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ShowCustomerAction
{
    public function execute($id): array
    {
        //        dd($customers);

        return Rental::with('employees', 'users', 'bike_details')
            ->where('employee_id', Auth::id())
            ->where('id',$id)
            ->get()->toArray();
    }
}
