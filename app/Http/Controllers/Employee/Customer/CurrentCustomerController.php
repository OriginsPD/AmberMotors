<?php

namespace App\Http\Controllers\Employee\Customer;

use App\Actions\ViewCurrentCustomerAction;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Payment\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrentCustomerController extends Controller
{
    public function index(ViewCurrentCustomerAction $CurrentCustomer)
    {
        $customers = $CurrentCustomer->execute();
//        dd($customers);
        return view('Employee.customer.current.index',compact(['customers']));
    }
}
