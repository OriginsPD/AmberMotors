<?php

namespace App\Actions\View;

use App\Models\AmberPay;
use Illuminate\Support\Facades\Auth;

class ViewIncomeAction
{
    public function execute()
    {
        return AmberPay::where('user_id',Auth::id())
            ->get()->toArray();
    }
}
