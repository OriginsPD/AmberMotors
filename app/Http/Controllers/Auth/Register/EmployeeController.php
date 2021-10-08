<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUser;
use App\Models\Employee;
use App\Models\role_user;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function create(): View
    {
        return view('Auth.register.employee.index');
    }

    public function store(CreateUser $request): RedirectResponse
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
                'employee_nbr' =>  Auth::id(),
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('Owner.index');
    }
}
