<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $result = Activity::all();
        $data = [
            "items" => $result,
        ];
        return view('home', $data);
    }

    public function create(){
        $result = Category::all();
        $data = [
            "categories" => $result
        ];
        return view('create', $data);
    }

    public function add(Request $request){
        $category_id = $request->input('category_id');
        $name = $request->input('name');

        $todo = new Activity();
        $todo->category_id = $category_id;
        $todo->name = $name;
        $todo->complete = 0;
        $todo->save();
        return redirect('/');
    }

    public function edit($id){
        $result = Activity::find($id);
        $category_result = Category::all();

        $data = [
            'activity' => $result,
            'categories' => $category_result
        ];

        return view('edit', $data);
    }

    public function update(Request $request, $id){
        $activity = Activity::find($id);
        $activity->name = $request->input('name');
        $activity->category_id = $request->input('category_id');
        $activity->complete = $request->input('complete');
        $activity->save();
        return redirect('/');
    }

    public function delete($id){
        $activity = Activity::find($id);
        $activity->delete();
        return redirect('/');
    }


}
