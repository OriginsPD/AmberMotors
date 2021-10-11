<?php

namespace App\Actions;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ShowCustomerAction
{
    public function execute($id): array
    {
        $customers = Rental::with('employees', 'users', 'bike_details')
            ->where('employee_id', Auth::id())
            ->where('id',$id)
            ->get()->toArray();

//        dd($customers);

        return $customers;
    }
}
