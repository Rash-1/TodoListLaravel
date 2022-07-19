@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-3 text-center">
                    <h3 class="display-3">Add new Category</h3>
                </div>
                <form action="/categories/store" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category  </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name">
                      </div>
                      <button type="submit" class="btn btn-primary">Add Category </button>
                </form>
            </div>
        </div>
    </div>
@endsection
