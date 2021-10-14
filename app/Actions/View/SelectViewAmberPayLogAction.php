<?php

namespace App\Actions\View;

use App\Models\AmberPay_log;
use Illuminate\Support\Facades\Auth;

class SelectViewAmberPayLogAction
{
    public function execute(): array
    {
       return AmberPay_log::with('rental','employee')
            ->get()->toArray();
    }
}
