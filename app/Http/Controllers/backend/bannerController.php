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
    function banners(Request $request)
    {
        return view('backend.banner.creatBanner');
    }

    function bannerpage(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
        ]);
        $imgName = str::random(5) . '.' . $request->image->extension();
        $request->image->move(public_path('bannerimg'), $imgName);
        $data['image'] = 'bannerimg/' . $imgName;

        $result = banner::create($data);
        if ($result) {
            return to_route('listbanner')->with('success', 'banner uploaded succesfull');
        } else {
            return back()->with('error', 'banner not uploaded');
        }
    }

    function listpage(Request $request)
    {
        $banners = banner::all();
        return view('backend.banner.listBanner', compact('banners'));
    }



    //yaha se edit or delete ka work hai

    // 4. Edit View Page
    function edit($id)
    {
        $banner = banner::findOrFail($id);
        return view('backend.banner.editbanner', compact('banner'));
    }

    // 5. Update Form Data
    function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $banner = banner::findOrFail($id);

       
        if ($request->hasFile('image')) {
            if ($banner->image && file_exists(public_path($banner->image))) {
                @unlink(public_path($banner->image));
            }
            $imgName = Str::random(7) . '.' . $request->image->extension();
            $request->image->move(public_path('bannerimg'), $imgName);
            $data['image'] = 'bannerimg/' . $imgName;
        } else {
            $data['image'] = $banner->image;
        }
        $result = $banner->update($data);

        if ($result) {
            return to_route('listbanner')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }


      // 6. Delete Data (AJAX Compatibility)
     function destroy($id)
    {
        $banner = banner::find($id);

        if (!$banner) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        if ($banner->image && file_exists(public_path($banner->image))) {
            @unlink(public_path($banner->image));
        }
       


        $banner->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
}
