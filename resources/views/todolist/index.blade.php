@extends('layouts.master')
@section('content')
    <div class="container mt-3">
        <a class="btn btn-info p-2 my-2" href="/todolists/create">Add New Todo List</a>
        <form action=""></form>
        <div class="row">
            <div class="col text-center ">
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category_ID</th>
                        <th scope="col">Details</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($todolists as $todo)
                    <tr>
                        <th scope="row">{{$todo->id}}</th>
                        <td>{{$todo->title}}</td>
                        <td>{{$todo->category_id}}</td>
                        <td><a href="/todolists/{{$todo->id}}" class="btn btn-success">Deteils</a></td>
                        <td><a class="btn btn-primary mb-2" href="/todolists/{{$todo->id}}/edit">Edit</a>
                            <form action="/todolists/{{$todo->id}}/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger d-inline-block">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
