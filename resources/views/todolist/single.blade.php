@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-box">
                    <h4 class="">{{$todo->title}}</h4>
                </div>
                <div class="text-box">
                    <p>
                        {{$todo->description}}
                    </p>
                </div>
                <div class="done-box">
                    @if($todo->done_at == null)
                    <form action="/todolists/{{$todo->id}}/done" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger">Submit to Check .</button>
                    </form>
                    @else
                        <div class="alert alert-success" role="alert">
                            You Have Done this Item at : {{$todo->done_at}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
