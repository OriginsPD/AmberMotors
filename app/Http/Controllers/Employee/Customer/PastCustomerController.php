<?php

namespace App\Http\Controllers\Employee\Customer;

use App\Actions\ViewCurrentCustomerAction;
use App\Actions\ViewPastCustomerAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PastCustomerController extends Controller
{
    public function index(ViewPastCustomerAction $PastCustomer)
    {
        $customers = $PastCustomer->execute();
//        dd($customers);
        return view('Employee.customer.current.index',compact(['customers']));
    }
}
