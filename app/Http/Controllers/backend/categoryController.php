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



        //yaha se edit or delete ka work hai

    // 4. Edit View Page
    function edit($id)
    {
        $category = category::findOrFail($id);
        return view('backend.category.editCat', compact('category'));
    }

    // 5. Update Form Data
    function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $category = category::findOrFail($id);

        
        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                @unlink(public_path($category->image));
            }
            $imgName = Str::random(7) . '.' . $request->image->extension();
            $request->image->move(public_path('catimage'), $imgName);
            $data['image'] = 'catimage/' . $imgName;
        } else {
            $data['image'] = $category->image;
        }
        $result = $category->update($data);

        if ($result) {
            return to_route('listcat')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }


      // 6. Delete Data (AJAX Compatibility)
     function destroy($id)
    {
        $category = category::find($id);

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        if ($category->image && file_exists(public_path($category->image))) {
            @unlink(public_path($category->image));
        }
       


        $category->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }



}
