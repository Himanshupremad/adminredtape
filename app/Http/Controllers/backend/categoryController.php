<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class categoryController extends Controller
{
    //
    function categorys(){
        return view("backend.category.createCategory");
    }


public function categorypage(Request $request)
{ 
    $data = $request->validate([ 
        'image' => 'required',
        'content' => 'required', 
    ]); 

    $imgName = Str::random(5) . '.' . $request->image->extension(); 
    $request->image->move(public_path('catimage'), $imgName); 
    $data['image'] = 'catimage/' . $imgName; 
    $result = Category::create($data); 
    if ($result) { 
        return to_route('listcat')->with('success', 'Category created successfully'); 
    } else { 
        return back()->with('error', 'Category creation failed'); 
    } 
}


    function catlist(Request $request){
        $categorys = category::all();
        return view('backend.category.listCategory', compact('categorys'));
    }
}
