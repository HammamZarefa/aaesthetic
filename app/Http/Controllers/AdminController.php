<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AdminController extends Controller
{
    public function admin(){
        $slides = Slider::orderBy('id', 'desc')->paginate(15);
        return view('admin.admin',compact('slides'));
    }

    public function slideDelete($id) {
        $slide = Slider::where('id',$id)->delete();
        
        return redirect()->back()->with('message', 'Slide has deleted successfully');
    }

    public function store(Request $request) {
        $images=array();
        if($request->file('images')){
            $files=$request->file('images');
            foreach($files as $file){
                $path = 'images/';
                $name=$file->getClientOriginalName();
                $name = $path.$name;
                $file->move($path,$name);
                Slider::insert( [
                    'slide_img'=>  $name
                ]);
                $images[]=$name;
            }
        }
        return redirect()->back()->with('message', 'Successfully Save Your Image file.');
    }
}
