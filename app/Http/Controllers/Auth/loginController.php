<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class loginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function store(CheckUser $request): RedirectResponse
    {
        if(Auth::attempt($request->validated())){
            $user = User::with('roles')->where('id',Auth::id())->get()->toArray();
            session()->put('role',$user[0]['roles'][0]['pivot']['role_id']);

            return redirect('/');
        }
        return back()->with('Error', 'Error');
    }
}
