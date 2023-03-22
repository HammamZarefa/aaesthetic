<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

class ProductController extends Controller
{
    public function product(){
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('product', compact('products'));
    }

    public function show(){
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('admin.products', compact('products'));
    }

    public function destroy($id){
        $products = Product::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Slide has deleted successfully');
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('admin.product_edit',compact('product'));
    }

    public function addImage(Request $request,$id){
        $product = Product::where('id',$id)->first();
        $images=array();
        if($request->file('images')){
            $files=$request->file('images');
            foreach($files as $file){
                $path = 'images/jobs/';
                $name=$file->getClientOriginalName();
                $name = $path.$name;
                $file->move($path,$name);
                Image::insert( [
                    'product_img'=>  $name,
                    'product_id'=> $id
                ]);
                $images[]=$name;
            }
        }
        return redirect()->back()->with('message', 'Your Images have been saved Successfully.');
    }

    public function deleteImage($id){
        $productImg = Image::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Your Image has been deleted Successfully.');
    }

    public function editProduct(Request $request,$id) {
        $product = Product::where('id',$id)->first();

        $product_title_ar = $request->pro_title_ar;
        $product_title_en = $request->pro_title_en;

        $product_desc_ar = $request->pro_desc_ar;
        $product_desc_en = $request->pro_desc_en;

        $data = [
            'ar' => ['product_title' => $product_title_ar, 'product_desc' => $product_desc_ar],
            'en' => ['product_title' => $product_title_en, 'product_desc' => $product_desc_en],
        ];
        $product->update($data);
        return redirect()->back()->with('message', 'Product info has been updated successfully');
    }

    public function create() {
        return view ('admin.add_product');
    }

    public function store(Request $request) {

        
        
        $product_title_ar = $request->pro_title_ar;
        $product_title_en = $request->pro_title_en;

        $product_desc_ar = $request->pro_desc_ar;
        $product_desc_en = $request->pro_desc_en;
        $data = [
            'ar' => ['product_title' => $product_title_ar, 'product_desc' => $product_desc_ar],
            'en' => ['product_title' => $product_title_en, 'product_desc' => $product_desc_en],
        ];
        $product = Product::create($data);
        $images=array();
        if($request->file('images')){
            $files=$request->file('images');
            foreach($files as $file){
                $path = 'images/jobs/';
                $name=$file->getClientOriginalName();
                $name = $path.$name;
                $file->move($path,$name);
                Image::insert( [
                    'product_img'=>  $name,
                    'product_id'=> $product->id
                ]);
                $images[]=$name;
            }
        }
        return redirect('admin/products')->with('message', 'New Product has been added successfully');
    }
}
