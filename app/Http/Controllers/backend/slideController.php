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



    
    //yaha se edit or delete ka work hai

    // 4. Edit View Page
    function edit($id)
    {
        $slider = slidebanner::findOrFail($id);
        return view('backend.slide.editSlide', compact('slider'));
    }

    // 5. Update Form Data
    function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $slider = slidebanner::findOrFail($id);

       
        if ($request->hasFile('image')) {
            if ($slider->image && file_exists(public_path($slider->image))) {
                @unlink(public_path($slider->image));
            }
            $imgName = Str::random(7) . '.' . $request->image->extension();
            $request->image->move(public_path('slideimg'), $imgName);
            $data['image'] = 'slideimg/' . $imgName;
        } else {
            $data['image'] = $slider->image;
        }
        $result = $slider->update($data);

        if ($result) {
            return to_route('slidelist')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }


      // 6. Delete Data (AJAX Compatibility)
     function destroy($id)
    {
        $slider = slidebanner::find($id);

        if (!$slider) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        if ($slider->image && file_exists(public_path($slider->image))) {
            @unlink(public_path($slider->image));
        }
        


        $slider->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
}
