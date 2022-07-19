@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-3 text-center">
                    <h3 class="display-3">Add new item</h3>
                </div>
                <form action="/todolists/{{$todo->id}}/update" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$todo->title}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Category </label>
                        <select class="form-select" aria-label="Default select example" id="exampleFormControlInput2" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if($category->id == $todo->category_id)
                                    selected
                                    @endif >
                                {{$category->name}}
                            </option>
                            @endforeach
                          </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description </label>
                        <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$todo->description}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Update item </button>
                </form>
            </div>
        </div>
    </div>
@endsection
