@extends('layouts.app')

@section('main_content')

{{-- "title" => "Action Comics #1000: The Deluxe Edition",
        "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
        "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
        "price" => "9.99",
        "series" => "Action Comics",
        "sale_date" => "2018-10-02",
        "type" => "comic book" --}}

    {{-- add style with bootstrap --}}

    <div class="card text-center">

        <div class="card-header">
          <img src="{{$comic->thumb}}" alt="">
        </div>

        <div class="card-footer text-muted">
            {{$comic->sale_date}}
        </div>

        <div class="card-footer text-muted">
            {{$comic->price}} £
        </div>

        <div class="card-footer text-muted">
            {{$comic->type}}
        </div>

        <div class="card-body">

            <h4 class="card-title">{{$comic->title}}</h4>

            <p class="card-text">{{ $comic->description }}</p>

            <div class="actions d-flex align-items-center justify-content-center gap-2">

                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

                <a href="{{route('comics.edit', ['comic' => $comic->id])}}" type="button" class="btn btn-secondary" data-toggle="button" aria-pressed="false" autocomplete="off">
                    Edit 
                </a>

            </div>          
         
            <a href="{{route('comics.index')}}" class="btn btn-dark m-3">Back to all comics</a>
        
        </div>
        
    </div>

@endsection