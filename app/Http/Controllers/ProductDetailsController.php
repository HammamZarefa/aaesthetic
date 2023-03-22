<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductDetailsController extends Controller
{
    public function productDetails($id){
        $product = Product::where('id',$id)->first();
        return view('product-details',compact('product'));
    }
}
