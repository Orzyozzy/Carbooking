<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    public function showLoginForm()
    {
        return view('auth.adminlogin');
    }

    public function login(Request $request)
    {
        $this->validate($request, 
        [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
       //Attempts
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
       //if successful
            return redirect()->intended( route('admin.page'));
       }
      
       //if unsuccessful
       return redirect()->back()->withInput($request->only('email','remember'));
    }
}
