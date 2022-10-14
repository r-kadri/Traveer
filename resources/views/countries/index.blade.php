@extends('layouts.app')
@section('content')
    <h1>Countries</h1>
    <ul>
        @foreach ($countries as $c)
        <li>
            <h2>{{$c->name}} :</h2>
            <p>{{$c->description}}</p>
            <p>Area : {{$c->areaKm2}} km²</p>
            <h4>Languages :</h4>
            @foreach ($c->languages as $l)
                <li>{{ $l->name }}</li>
            @endforeach
            <h4>Cities :</h4>
            @foreach ($c->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </li>
        @endforeach
    </ul>
    
@endsection