<?php

namespace App\Http\Controllers\Employee\Customer;

use App\Actions\ShowCustomerAction;
use App\Actions\ViewPastCustomerAction;
use App\Http\Controllers\Controller;
use App\Models\Payment\Rental;
use Illuminate\Http\Request;

class PastCustomerController extends Controller
{
    public function index(ViewPastCustomerAction $PastCustomer)
    {
        $customers = $PastCustomer->execute();
//        dd($customers);
        return view('Employee.customer.past.index', compact(['customers']));
    }

    public function show($id, ShowCustomerAction $showCustomer)
    {
        $customer = $showCustomer->execute($id);

        return view('Employee.customer.past.show',compact(['customer']));
    }
}
