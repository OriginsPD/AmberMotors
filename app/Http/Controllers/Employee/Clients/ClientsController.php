<?php

namespace App\Http\Controllers\Employee\Clients;

use App\Actions\SearchBikeAction;
use App\Actions\ShowCustomerAction;
use App\Actions\ViewCurrentCustomerAction;
use App\Actions\ViewPastCustomerAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(ViewPastCustomerAction $PastCustomer,
                          ViewCurrentCustomerAction $CurrentCustomer,
                          SearchBikeAction $SearchBike,Request $request)
    {
        $currents = $CurrentCustomer->execute();
        $pasts = $PastCustomer->execute();
        $bikes = $SearchBike->execute($request);


//        dd($customers);
        return view('Employee.clients.lists.index', compact(['pasts','currents','bikes']));
    }

    public function show($id, ShowCustomerAction $showCustomer)
    {
        $customer = $showCustomer->execute($id);

        return view('Employee.clients.rent_details.show',compact(['customer']));
    }
}
