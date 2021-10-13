<?php

namespace App\Http\Controllers\Employee;

use App\Actions\View\ViewIncomeAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(ViewIncomeAction $incomeAction)
    {
        $income = $incomeAction->execute();
//        dd($income);
        return view('Employee.wallet.index',compact(['income']));
    }
}
