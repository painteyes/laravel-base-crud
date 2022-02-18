{{--------------------------------------------}}

@extends('layouts.app')

{{--------------------------------------------}}

@section('page_title')
    Homepage
@endsection

{{--------------------------------------------}}

@section('main_content')

<div class="jumbotron d-flex align-items-center justify-content-center">

    <a href="{{route('comics.index')}}" class="btn btn-lg btn-dark m-2" type="button">All comics</a>
    <a href="{{route('comics.create')}}" class="btn btn-lg btn-success m-2" type="button">Add new comics</a>

</div>


@endsection

{{--------------------------------------------}}