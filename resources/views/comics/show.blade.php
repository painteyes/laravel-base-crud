@extends('layouts.app')

@section('main_content')

    <div class="card text-center">
        
        <div class="card-body">

            <div class="">
                <img src="{{$comic->thumb}}" alt="">
            </div>

            <h4 class="card-title m-3">{{$comic->title}}</h4>

            <div class="card-header text-muted">
                Series 
            </div>

            <div class="card text-muted">
                {{$comic->series}}
            </div>

            <div class="card-header text-muted">
                Sale date
            </div>

            <div class="card text-muted">
                {{$comic->sale_date}}
            </div>

            <div class="card-header text-muted">
                Type
            </div>

            <div class="card text-muted">
                {{$comic->type}}
            </div>

            <div class="card-header text-muted">
                Price
            </div>

            <div class="card text-muted">
                {{$comic->price}} £
            </div>

            <p class="card-text m-4">{{ $comic->description }}</p>

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