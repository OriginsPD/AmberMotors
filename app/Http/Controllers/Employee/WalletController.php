<?php

namespace App\Http\Controllers\Employee;

use App\Actions\View\SelectViewAmberPayLogAction;
use App\Actions\View\ViewIncomeAction;
use App\Actions\View\ViewRentalStatsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WalletController extends Controller
{
    public function index(ViewIncomeAction $incomeAction,
                          SelectViewAmberPayLogAction $amberPayLogAction,
                          ViewRentalStatsAction $statsAction): View
    {
        $income = $incomeAction->execute();
        $income_logs = $amberPayLogAction->execute();
        $stats = $statsAction->execute();
//        dd($stats);
        return view('Employee.wallet.index',compact(['income','income_logs']));
    }

}
