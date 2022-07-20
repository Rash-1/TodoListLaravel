@if( count($errors->all()) > 0 )
    <ul class="bg-danger p-2 mt-2">
        @foreach($errors->all() as $error)
            <li class="p-2">{{$error}}</li>
        @endforeach
    </ul>
@endif
