<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Laravel\Mcp\Request as McpRequest;

class bannerController extends Controller
{
    //
    function banners()
    {
        return view('backend.banner.creatBanner');
    }

    function bannerpage(Request $request)
    {
       $data = $request->validate([
            'image' => 'required',
        ]);
        $imgName = str::random(5). '.' . $request->image->extension();
        $request->image->move(public_path('bannerimg'), $imgName);
        $data['image'] = 'bannerimg/' . $imgName;

        $result = banner::create($data);
        if ($result) {
            return to_route('listbanner')->with('success', 'banner uploaded succesfull');
        }else{
            return back()->with('error', 'banner not uploaded');
        }
    }

    function listpage(Request $request){
        $banners = banner::all();
        return view('backend.banner.listBanner', compact('banners'));
    }

    
}
