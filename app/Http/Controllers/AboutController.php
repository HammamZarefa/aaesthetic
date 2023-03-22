<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function about() {
        $about = About::first();
        return view('about',compact('about'));
    }

    public function show() {
        $about = About::first();
        return view('admin.about',compact('about'));
    }

    public function update(Request $request){
        $about_txt = About::first();
        $about_ar = $request->about_ar;
        $about_en = $request->about_en;
        $data = [
            
            'en'  => ['about_desc' => $about_en],
            'ar'  => ['about_desc' => $about_ar],
            
        ];
        $about_txt -> update($data);
        return redirect()->back()->with('message', 'About us has updated successfully');
    }
}
