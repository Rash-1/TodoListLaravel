<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\TodoListRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\TodoList;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all() ;
        return view('category.index' , ['categories' => $categories]) ;
    }
    public function create()
    {
        return view('category.create') ;
    }

    public function store(CategoryRequest $request)
    {
        Category::query()->create([
            'name' => $request->get('category_name')
        ]);

        return redirect('/categories') ;
    }

    public function edit(Category $id)
    {
        if($id->name == 'none'){

            return redirect()->back()->withErrors(['Category'=>'Sorry This Category is Default You Can not Edit !']) ;
        }
         return view('category.edit' ,['category' => $id]) ;
    }
    public function update(Category $id ,UpdateCategoryRequest $request )
    {
        $id->update([
            'name' => $request->get('category_name')
        ]);

        return redirect('/categories') ;
    }

    public function delete(Category $id)
    {
        if($id->name == 'none'){
            return redirect()->back()->withErrors(['Category'=>'Sorry This Category is Default You Can not Delete !']) ;
        }else{
            TodoList::query()->where('category_id' , '=' ,$id->id )->delete() ;
            $id->delete();
        }

        return redirect('/categories') ;
    }
}
