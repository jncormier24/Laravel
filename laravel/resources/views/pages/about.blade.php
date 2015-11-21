@extends("app")
@section("content")
    <h1>About Me: {{$first}} {{$last}}</h1>

    <h2>People:</h2>
    @if(0 < count($people))
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto deleniti dolor dolores et illum in ipsa neque nihil nisi nostrum officia pariatur quas, quibusdam repellendus ullam voluptas voluptatibus. Dolorem.</p>
@stop