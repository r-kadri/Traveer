@extends('layouts.app')
@section('content')
    <h1>Tests</h1>
    @foreach ($countries as $c)
        <h2>{{$c->name}} :</h2>
        <ul>
            <h4>Languages :</h4>
            @foreach ($c->languages as $l)
                <li>{{ $l->name }}
                    @foreach ($l->countries as $coun)
                        <br> {{$coun->name}}
                    @endforeach
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection