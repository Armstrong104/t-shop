<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.product.index',['products'=>Product::all()]);
    }

    public function create(){
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:50',
            'price' => 'required | numeric | min:0 | not_in:0',
            'image' => 'image | mimes:jpg,png,bmp,webp',
            'description' => 'max:100'
        ],[
            'title.required' => 'Enter Product Title'
        ]);
        $image = $request->image;
        $product = new Product();
        $product->title         = $request->title;
        $product->description   = $request->description;
        $product->price         = $request->price;
        if($image)
        {
            $product->image         = $image->getClientOriginalName();
        }
        $product->save();
        return back()->with('notification','Product Added Successfully');
    }

    public function edit(int $id)
    {
        $product = Product::where('id',$id)->first();
        return view('backend.product.edit',['product'=>$product]);
    }
    
    public function update(Request $request,int $id)
    {
        $request->validate([
            'title' => 'required | max:50',
            'price' => 'required | numeric | min:0 | not_in:0',
            'image' => 'image | mimes:jpg,png,bmp,webp',
            'description' => 'max:100'
        ]);

        $product = new Product();
        $product->title         = $request->title;
        $product->description   = $request->description;
        $product->price         = $request->price;
        // $product->image         = $request->image;
        $product->save();

        return to_route('products')->with('notification','Product Updated Successfully');
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->with('notification','Product Deleted Successfully');
    }



}
