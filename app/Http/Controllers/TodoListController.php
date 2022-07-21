<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoListRequest;
use App\Http\Requests\UpdateTodoListRequest;
use App\Models\Category;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function home()
    {
        return view('index') ;
    }
    public function index()
    {
        $todolists = TodoList::all() ;
        $categories = Category::all();
        return view('todolist.index' , ['todolists' => $todolists , 'categories' => $categories]);
    }

    public function singlePage(TodoList $id)
    {
        return view('todolist.single' , ['todo' => $id]);
    }

    public function done(TodoList $id)
    {
         $id->update([
            'done_at' => now()
        ]);
        return redirect()->back() ;
    }
    public function edit(TodoList $id)
    {
        return view('todolist.edit' ,['todo' => $id , 'categories' => Category::all() ]) ;
    }

    public function update(UpdateTodoListRequest $request , TodoList $id)
    {
        $id->update([
            'title' => $request->get('title') ,
            'description' => $request->get('description') ,
            'category_id' => $request->get('category_id') ,
        ]);
        return redirect('/todolists') ;
    }

    public function create()
    {
        $categories = Category::all() ;
        return view('todolist.create' , ['categories' => $categories]) ;
    }

    public function store(TodoListRequest $request)
    {

     TodoList::query()->create([
         'title' => $request->get('title') ,
         'category_id' => $request->get('category_id') ,
         'description' => $request->get('description')
     ]);

     return back();
    }

    public function delete(TodoList $id)
    {
        $id->delete() ;
        return back() ;
    }
}
