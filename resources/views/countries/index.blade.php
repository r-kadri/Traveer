@extends('layouts.app')
@section('content')
    <h1>Countries</h1>
        @foreach ($countries as $c)
            <h2>{{$c->name}} :</h2>
            <p>{{$c->description}}</p>
            <p>Area : {{$c->areaKm2}} km²</p>
        @endforeach
    
@endsection