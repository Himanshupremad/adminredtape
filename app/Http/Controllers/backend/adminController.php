<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\category;
use App\Models\slidebanner;
use App\Models\trending;
use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    //

    function adminpage(){
        $banners = banner::count();
        $categorys = category::count();
        $trends = trending::count();
        $slides = slidebanner::count();
        $videos = video::count();
        // return $banners;
        return view('backend.adminpanel',compact('banners', 'categorys', 'trends', 'slides', 'videos'));
    }

       public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        return to_route('login')->with('success', 'logged out successfull');
    }


     // 1. View / Show Single Record
    public function show($id)
    {
        $item = User::find($id);
        return view('admin.show', compact('item'));
    }

    // 2. Edit Form Show
    public function edit($id)
    {
        $item = User::find($id);
        return view('admin.edit', compact('item'));
    }

    // 3. Update Data
    public function update(Request $request, $id)
    {
        $item = User::find($id);
        $item->update($request->all());
        return redirect()->route('admin.item.show', $id)->with('success', 'Data updated successfully!');
    }

    // 4. Delete Data
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    }
}
