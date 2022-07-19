@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-3 text-center">
                    <h3 class="display-3">Edit Category</h3>
                </div>
                <form action="/categories/{{$category->id}}/update" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category  </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name" value="{{$category->name}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Update Category </button>
                </form>
            </div>
        </div>
    </div>
@endsection
