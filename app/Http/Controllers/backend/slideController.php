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
            // 'image1' => 'required',
            // 'image2' => 'required',
            // 'image3' => 'required',
        ]);
        $imgName = str::random(5). '.' . $request->image->extension();
        $request->image->move(public_path('slideimg'), $imgName);
        $data['image'] = 'slideimg/' . $imgName;

        //   $imgName1 = str::random(5). '.' . $request->image1->extension();
        // $request->image1->move(public_path('slideimg'), $imgName1);
        // $data['image1'] = 'slideimg/' . $imgName1;

        //    $imgName2 = str::random(5). '.' . $request->image2->extension();
        // $request->image2->move(public_path('slideimg'), $imgName2);
        // $data['image2'] = 'slideimg/' . $imgName2;

        //    $imgName3 = str::random(5). '.' . $request->image3->extension();
        // $request->image3->move(public_path('slideimg'), $imgName3);
        // $data['image3'] = 'slideimg/' . $imgName3;

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
