<?php

namespace App\Actions\View;

use App\Models\Payment\Rental;
use Illuminate\Support\Facades\Auth;

class ViewPastCustomerAction
{
    public function execute(): array
    {
        //        dd($customers);
        return Rental::with('employees', 'users', 'bike_details')
            ->where('employee_id', Auth::id())
            ->get()->toArray();
    }
}
