<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeInfo;
use App\Slider;
use App\About;
use App\Product;

class HomePageController extends Controller
{
    public function index(){
        $slides = Slider::orderBy('id','desc')->take(10)->get();
        $about = About::where('id',1)->first();
        $products = Product::orderBy('id','desc')->take(10)->get();
        return view('index',compact('slides','about','products'));
    }
}
