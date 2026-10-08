<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\slidebanner;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class slideController extends Controller
{
    //
    function slidebanner(){
        return view('backend.slide.createSilde');
    }

    function slidepage(Request $request){

       $data = $request->validate([
            'image' => 'required',
        ]);
        $imgName = str::random(5). '.' . $request->image->extension();
        $request->image->move(public_path('slideimg'), $imgName);
        $data['image'] = 'slideimg/' . $imgName;

        $result = slidebanner::create($data);
        if ($result) {
            return to_route('slidelist')->with('success', 'banner uploaded succesfull');
        }else{
            return back()->with('error', 'banner not uploaded');
        }
    }

    function slidelist(Request $request){
        $sliders = slidebanner::all();
        return view('backend.slide.listSlide', compact('sliders'));
    }
}
