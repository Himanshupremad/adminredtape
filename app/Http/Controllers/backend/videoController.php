<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\video;
use Illuminate\Support\str;
use Illuminate\Http\Request;

class videoController extends Controller
{
    //
       function videos(){
        return view('backend.video.createVideo');
    }

    function videopage(Request $request){

       $data = $request->validate([
            'video' => 'required',
        ]);
        $videoName = str::random(5). '.' . $request->video->extension();
        $request->video->move(public_path('showvideo'), $videoName);
        $data['video'] = 'showvideo/' . $videoName;

        $result = video::create($data);
        if ($result) {
            return to_route('vdlist')->with('success', 'banner uploaded succesfull');
        }else{
            return back()->with('error', 'banner not uploaded');
        }
    }

    function videolist(Request $request){
        $shows = video::all();
        return view('backend.video.listvideo', compact('shows'));
    }
}
