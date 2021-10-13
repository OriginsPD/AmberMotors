<?php

namespace App\Http\Controllers\Employee\Clients;

use App\Actions\Search\SearchBikeAction;
use App\Actions\Search\ShowCustomerAction;
use App\Actions\View\ViewClientPenaltyAction;
use App\Actions\View\ViewCurrentCustomerAction;
use App\Actions\View\ViewPastCustomerAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientsController extends Controller
{
    public function index(ViewPastCustomerAction $PastCustomer,
                          ViewCurrentCustomerAction $CurrentCustomer,
                          SearchBikeAction $SearchBike,
                          ViewClientPenaltyAction $penaltyAction,
                          Request $request): View
    {
        $currents = $CurrentCustomer->execute();
        $pasts = $PastCustomer->execute();
        $penalties = $penaltyAction->execute();
        $bikes = $SearchBike->execute($request);


//        dd($customers);
        return view('Employee.clients.lists.index', compact(['pasts','currents','bikes','penalties']));
    }

    public function show($id, ShowCustomerAction $showCustomer)
    {
        $customer = $showCustomer->execute($id);

//        dd($customer);

        return view('Employee.clients.rent_details.show',compact(['customer']));
    }
}
