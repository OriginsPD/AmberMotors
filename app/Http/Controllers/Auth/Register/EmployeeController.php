<?php

namespace App\Http\Controllers\Auth\Register;

use App\Actions\Create\CreateEmployeeAction;
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

    public function store(CreateUser $request,CreateEmployeeAction $employeeAction): RedirectResponse
    {
        $employeeAction->execute($request);
        return redirect()->route('Owner.index');
    }
}
