<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
  public function show_register()
  {
    return view('AUTH.register');
  }
  public function register(Request $request)
  {
    $val = $request->validate(
      [
        'email' => 'unique:users,email',
        'password_confirm' => 'same:password',
      ],
      [
        'unique' => '*This Email is unavailable',
        'same' => 'Password does not match',
      ]
    );

    if ($val) {
      User::create([
        'name' => $request->fullname,
        'email' => $request->email,
        'phone_no' => $request->phone_info,
        'address' => $request->address,
        'password' => Hash::make($request->password),
        'user_type' => $request->usertype,
      ]);

      return redirect('/');
      // ->with('Success',"Welcome auth()->user()->name");
    } else {
      return redirect()->back()->withErrors($val);
    }
  }


  public function show_login()
  {
    return view('AUTH.login');
  }



  public function login(Request $request)
  {
    $val = $request->validate(
      [
        'email' => 'exists:users,email',
      ],
      [
        'exists' => '*Email does not exist'
      ]
    );

    $email = $request->email;
    $password = $request->password;
    if ($val) {
      if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect('/');
      } else return redirect()->back()->withErrors('Password Incorrect');
    } else {
      return redirect()->back()->withErrors($val);
    }
  }


  public function logout(Request $req)
  {
    if ($req->session()->has('user')) {

      $req->session()->flush();
      return redirect()->route('login.show');
    } else {
      return redirect()->route('login.show');
    }
  }
}
