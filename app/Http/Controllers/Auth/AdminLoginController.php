<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');;
    }

     public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'    => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email ,'password' => $request->password],$request->remember)){

            return redirect()->intended(route('admin.home'));

        }else{
            return redirect()->back()->withInput($request->only('email','remember'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
