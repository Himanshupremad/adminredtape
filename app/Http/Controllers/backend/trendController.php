<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\trending;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class trendController extends Controller
{
    //

     function trendings()
    {
        return view("backend.trending.createTrend");
    }

    // 2. Store Form Data
     function trendingpage(Request $request)
    {
        $data = $request->validate([
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image1'      => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required',
            'color'       => 'required',
            'vendor'      => 'required',
            'sku'         => 'required',
            'discount'    => 'required',
            'price'       => 'required',
            
        ]);

        // First Image Process
        $imgName = Str::random(7) . '.' . $request->image->extension();
        $request->image->move(public_path('trendimage'), $imgName);
        $data['image'] = 'trendimage/' . $imgName;

        // Second Image Process
        $imgName1 = Str::random(7) . '.' . $request->image1->extension();
        $request->image1->move(public_path('trendimage'), $imgName1);
        $data['image1'] = 'trendimage/' . $imgName1;

        $result = trending::create($data);

        if ($result) {
            return to_route('trendlist')->with('success', 'Product created successfully!');
        } else {
            return back()->with('error', 'Product creation failed.');
        }
    }

     function trendlist(Request $request)
    {
        $trends = trending::all();
        return view('backend.trending.listTrend', compact('trends'));
    }







    //yaha se edit or delete ka work hai

    // 4. Edit View Page
     function edit($id)
    {
        $product = trending::findOrFail($id);
        return view('backend.trending.edit', compact('product'));
    }

    // 5. Update Form Data
     function update(Request $request, $id)
    {
        $data = $request->validate([
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image1'      => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required',
            'color'       => 'required',
            'vendor'      => 'required',
            'sku'         => 'required',
            'discount'    => 'required',
            'price'       => 'required',
           
        ]);

        $product = trending::findOrFail($id);

        // Update First Image if uploaded
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
            $imgName = Str::random(7) . '.' . $request->image->extension();
            $request->image->move(public_path('trendimage'), $imgName);
            $data['image'] = 'trendimage/' . $imgName;
        } else {
            $data['image'] = $product->image;
        }

        // Update Second Image if uploaded
        if ($request->hasFile('image1')) {
            if ($product->image1 && file_exists(public_path($product->image1))) {
                @unlink(public_path($product->image1));
            }
            $imgName1 = Str::random(7) . '.' . $request->image1->extension();
            $request->image1->move(public_path('trendimage'), $imgName1);
            $data['image1'] = 'trendimage/' . $imgName1;
        } else {
            $data['image1'] = $product->image1;
        }

        $result = $product->update($data);

        if ($result) {
            return to_route('trendlist')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }

    // 6. Delete Data (AJAX Compatibility)
     function destroy($id)
    {
        $product = trending::find($id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        if ($product->image && file_exists(public_path($product->image))) {
            @unlink(public_path($product->image));
        }
        if ($product->image1 && file_exists(public_path($product->image1))) {
            @unlink(public_path($product->image1));
        }


        $product->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
}


