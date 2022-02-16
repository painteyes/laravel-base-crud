@extends('layouts.app')

@section('main_content')

@foreach ($comics as $comic)

    <h2>{{$comic->title}}</h2>
    <p>{{$comic->description}} </p>
    <a href="">{{$comic->thumb}}</a>
    <ul>
        <li>{{$comic->price}} €</li>
        <li>{{$comic->series}}</li>
        <li>{{$comic->sale_date}}</li>
        <li>{{$comic->type}}</li>
    </ul> 

@endforeach

@endsection