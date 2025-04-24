<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categories',['categories' => $categories]);
    }

    public function create(){
        return view('createCat');
    }

    public function store(Request $request){
        $category = new Category;
        $category->title = $request->title;

        $category->save();
        return redirect('/categories');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('editCat',['category'=>$category]);
    }

    public function update(request $request,$id){
        $category = Category::where('id',$id)->first();
        $category->title = $request->title;
        $category->save();

        return redirect('/categories');
    }

    public function delete($id){
        $category = Category::where('id',$id)->first();
        $category->delete();

        return redirect('/categories');
    }
}
