<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
         $products = Product::all();
         return view('admin.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = Category::all();
        return view('admin.create_product',compact('Categories'));
    }
    public function store(Request $request)
    {
        $product = new Product();
        $request->validate([
            'title' => 'required',
            'cate_id' =>'required',
            'small_desc' =>'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        $photo = $request->image;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/categories',$newPhoto);

        $product->title = $request->input('title');
        $product->cate_id = $request->input('cate_id');
        $product->image = 'uploads/categories/'.$newPhoto;
        $product->small_desc = $request->input('small_desc');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->sell_price = $request->input('sell_price');
        $product->status = $request->input('status')==TRUE?'1':'0';
        $product->trending = $request->input('trending')==TRUE?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_desc = $request->input('meta_desc');
        $product->meta_keywords = $request->input('meta_keywords');

        $product->save();

        return  redirect('products')->with('success','product added successfully');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.show_product',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $Categories = Category::all();
        return view('admin.edit_product',compact('product','Categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'title' => 'required',
            'cate_id' =>'required',
            'small_desc' =>'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        $photo = $request->image;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/categories',$newPhoto);

        $product->title = $request->input('title');
        $product->cate_id = $request->input('cate_id');
        $product->image = 'uploads/categories/'.$newPhoto;
        $product->small_desc = $request->input('small_desc');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->sell_price = $request->input('sell_price');
        $product->status = $request->input('status')==TRUE?'1':'0';
        $product->trending = $request->input('trending')==TRUE?'1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_desc = $request->input('meta_desc');
        $product->meta_keywords = $request->input('meta_keywords');

        $product->update();
        return  redirect('products')->with('success','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $path = 'uploads/categories'.$product->image;
        File::delete($path);
        $product->delete();
        return  redirect('products')->with('success','Product Deleted Successfully');

    }
}
