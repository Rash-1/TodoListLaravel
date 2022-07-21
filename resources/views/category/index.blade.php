@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-5 text-center">
                    <h4 class="display-4">Categories : </h4>
                    <a href="/categories/create" class="btn btn-primary mt-3">Add New Category</a>
                </div>
                @include('layouts.errors')
                <ol class="list-group list-group-numbered">
                    @foreach($categories as $category)
                    <li class="list-group-item">
                        {{$category->name}}
                        <a  href="/categories/{{$category->id}}/edit" class="btn btn-dark ms-5"> Edit </a>
                        <form class="d-inline-block" action="/categories/{{$category->id}}/delete"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete !</button>
                        </form>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
