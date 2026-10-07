<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    //
    function regpage(){
        return view('frontend.register');
    }

    function register(Request $request){

    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email', 
        'password' => 'required', 
    ]);

    $data['password'] = Hash::make($request->password); 
   
    $result = User::create($data); 

    if($result){
        return to_route('login')->with('success', 'Registration successful! Please login.');
    } else {
        return "Registration is not successful";
    }
}

}
