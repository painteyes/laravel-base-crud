@extends('layouts.app')

@section('page_title')
Comics  
@endsection

@section('main_content')

    {{-- adding style with bootstrap --}}

    <div class="comics-list">

        @foreach ($comics as $comic)

            <a class='content' href="{{route('comics.show', ['comic' => $comic->id])}}">

                <div class="comic">

                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
        
                            <div class="poster">
                                <img src="{{$comic->thumb}}" alt="">
                            </div>

                            <div class="text-area">  

                                <h5 class="card-title">{{$comic->title}}</h5>                
                                <h6 class="card-subtitle mb-2 text-muted">{{$comic->series}}</h6>
                
                                <p class="card-text">
                                    
                                    @if (strlen($comic->description) > 150)                                        
                                        {{ substr($comic->description, 0, 150) . '...' }}                                        
                                    @else                                         
                                        {{ $comic->description }}                                    
                                    @endif

                                    <a href="#" class="card-link">Read more</a>
                                
                                </p>
                            </div>                             
                            
                        </div>
                    </div>
                </div> 
            </a>

        @endforeach

    </div>

@endsection