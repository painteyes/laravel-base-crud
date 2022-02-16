@extends('layouts.app')

@section('page_title')
Comics  
@endsection

@section('main_content')

    <div class="comics-list">

        @foreach ($comics as $comic)

            <div class="comic">
            
                <a href="{{route('comics.show', ['comic' => $comic->id])}}">

                    <div class="poster">
                        <img src="{{$comic->thumb}}" alt="">
                    </div>
                    
                    <h2>{{$comic->title}}</h2>  
                </a>
                
                <p>{{$comic->description}}</p>
                
                <ul>
                    <li>{{$comic->price}} €</li>
                    <li>{{$comic->series}}</li>
                    <li>{{$comic->sale_date}}</li>
                    <li>{{$comic->type}}</li>
                </ul>

            </div> 

        @endforeach

    </div>

@endsection