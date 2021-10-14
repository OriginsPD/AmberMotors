<?php

namespace App\Http\Controllers\Employee;

use App\Actions\View\SelectViewAmberPayLogAction;
use App\Actions\View\ViewIncomeAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(ViewIncomeAction $incomeAction, SelectViewAmberPayLogAction $amberPayLogAction)
    {
        $income = $incomeAction->execute();
        $income_logs = $amberPayLogAction->execute();
//        dd($income_log);
        return view('Employee.wallet.index',compact(['income','income_logs']));
    }

}
