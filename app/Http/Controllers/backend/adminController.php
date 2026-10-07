<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //

    function adminpage(){
        return view('backend.adminpanel');
    }

       public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        return to_route('login')->with('success', 'logged out successfull');
    }
}
