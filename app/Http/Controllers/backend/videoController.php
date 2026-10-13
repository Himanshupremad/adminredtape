<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\video;
use Illuminate\Support\str;
use Illuminate\Http\Request;

class videoController extends Controller
{
    //
    function videos()
    {
        return view('backend.video.createVideo');
    }

    function videopage(Request $request)
    {

        $data = $request->validate([
            'video' => 'required',
        ]);
        $videoName = str::random(5) . '.' . $request->video->extension();
        $request->video->move(public_path('showvideo'), $videoName);
        $data['video'] = 'showvideo/' . $videoName;

        $result = video::create($data);
        if ($result) {
            return to_route('vdlist')->with('success', 'banner uploaded succesfull');
        } else {
            return back()->with('error', 'banner not uploaded');
        }
    }

    function videolist(Request $request)
    {
        $shows = video::all();
        return view('backend.video.listvideo', compact('shows'));
    }



    //yaha se edit or delete ka work hai

    // 4. Edit View Page
    function edit($id)
    {
        $show = video::findOrFail($id);
        return view('backend.video.editVideo', compact('show'));
    }

    // 5. Update Form Data
    function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $show = video::findOrFail($id);


        if ($request->hasFile('video')) {
            if ($show->video && file_exists(public_path($show->video))) {
                @unlink(public_path($show->video));
            }
            $videoName = str::random(5) . '.' . $request->video->extension();
            $request->video->move(public_path('showvideo'), $videoName);
            $data['video'] = 'showvideo/' . $videoName;
        } else {
            $data['image'] = $show->video;
        }
        $result = $show->update($data);

        if ($result) {
            return to_route('vdlist')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }


    // 6. Delete Data (AJAX Compatibility)
    function destroy($id)
    {
        $show = video::find($id);

        if (!$show) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        if ($show->video && file_exists(public_path($show->video))) {
            @unlink(public_path($show->video));
        }
      
        $show->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
}
