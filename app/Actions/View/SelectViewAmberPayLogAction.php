<?php

namespace App\Actions\View;

use App\Models\AmberPay_log;
use Illuminate\Support\Facades\Auth;

class SelectViewAmberPayLogAction
{
    public function execute()
    {
       return AmberPay_log::with('users')->where('user_id',Auth::id())
            ->get()->toArray();
    }
}
