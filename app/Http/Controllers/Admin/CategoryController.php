<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_category');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $photo = $request->image;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/categories',$newPhoto);

        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->image = 'uploads/categories/'.$newPhoto;
        $category->description = $request->input('description');
        $category->status = $request->input('status')==TRUE?'1':'0';
        $category->popular = $request->input('popular')==TRUE?'1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');

        $category->save();

        return  redirect('categories')->with('success','Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.show_category',compact('category'));
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        $photo = $request->image;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/categories',$newPhoto);

        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->image = 'uploads/categories/'.$newPhoto;
        $category->description = $request->input('description');
        $category->status = $request->input('status')==TRUE?'1':'0';
        $category->popular = $request->input('popular')==TRUE?'1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();
        return  redirect('categories')->with('success','Category Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $path = 'uploads/categories'.$category->image;
        File::delete($path);
        $category->delete();
        return  redirect('categories')->with('success','Category Deleted Successfully');
    }
}
