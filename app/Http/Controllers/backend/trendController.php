<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\trending;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class trendController extends Controller
{
    //
       function trendings(){
        return view("backend.trending.createTrend");
    }


// public function trendingpage(Request $request)
// { 
//     $data = $request->validate([ 
//         'image' => 'required',
//         'image1' => 'required',
//         'image2' => 'required',
        
//     ]); 

//     $imgName = Str::random(7) . '.' . $request->image->extension(); 
//     $request->image->move(public_path('trendimage'), $imgName); 
//     $data['image'] = 'trendimage/' . $imgName; 
//     $result = trending::create($data); 
//     if ($result) { 
//         return to_route('trendlist')->with('success', 'Category created successfully'); 
//     } else { 
//         return back()->with('error', 'Category creation failed'); 
//     } 
// }


public function trendingpage(Request $request) 
{ 
    // 1. Teeno images ko validate karein
    $data = $request->validate([ 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
        'image1' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
        'content' => 'required',
        'price' => 'required',
    ]); 

  
    $imgName = Str::random(7) . '.' . $request->image->extension(); 
    $request->image->move(public_path('trendimage'), $imgName); 
    $data['image'] = 'trendimage/' . $imgName; 

    $imgName1 = Str::random(7) . '.' . $request->image1->extension(); 
    $request->image1->move(public_path('trendimage'), $imgName1); 
    $data['image1'] = 'trendimage/' . $imgName1; 

    $result = trending::create($data); 

    if ($result) { 
        return to_route('trendlist')->with('success', 'Category created successfully'); 
    } else { 
        return back()->with('error', 'Category creation failed'); 
    } 
}


    function trendlist(Request $request){
        $trends = trending::all();
        return view('backend.trending.listTrend', compact('trends'));
    }
}
