<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    function login(){
        return view('frontend.login');
    }
    function loginpage(Request $request){
          $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
          $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {

            $request->session()->regenerate();

            return to_route('admin')->with("success", "login is successfull and right login");
        } else {

            return to_route('login')->with("error", "login email ya password galat hai");
        }
    }
}
