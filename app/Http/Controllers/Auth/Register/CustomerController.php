<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUser;
use App\Models\role_user;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function create()
    {
        return view('Auth.register.customer.index');
    }

    public function store(CreateUser $request): RedirectResponse
    {

        User::create([
            'name' => $request->name,
            'phone_nbr' => $request->phone_nbr,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password]))
        {
            role_user::create([
                'user_id' => Auth::id(),
                'role_id' => 1,
            ]);
            return redirect()->route('index');
        }

        return redirect()->route('login.index');
    }
}
