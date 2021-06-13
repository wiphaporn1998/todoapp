<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $result = Category::all();

        $data = [
            'categories' => $result,
        ];

        return view('category.index', $data);
    }

    public function create(){
        return view('category.create');
    }

    public function add(Request $request){
        $name = $request->input('name');

        $category = new Category();
        $category->name = $name;
        $category->save();

        return redirect('/category');
    }

    public function edit($id){
        $result = Category::find($id);

        $data = [
            'category' => $result
        ];

        return view('category.edit');
    }

    public function update(Request $request, $id){
        $name = $request->input('name');

        $result = Category::find($id);
        $result->name = $name;
        $result->save();

        return redirect('/category');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }

}
