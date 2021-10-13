<?php

namespace App\Actions\Create;

use App\Http\Requests\CreateUser;
use App\Models\AmberPay;
use App\Models\Employee;
use App\Models\role_user;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CreateEmployeeAction
{
    public function execute(CreateUser $request): void
    {
        User::create($request->validated());

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password]))
        {
            role_user::create([
                'user_id' => Auth::id(),
                'role_id' => 2,
            ]);

            Employee::create([
                'employee_id' =>  Auth::id(),
                'user_id' => Auth::id(),
            ]);

            AmberPay::create([
                'user_id' => Auth::id(),
                'accumulate_amt' => 0,
                'update_on' => Carbon::today('Jamaica')
            ]);
        }
    }
}
