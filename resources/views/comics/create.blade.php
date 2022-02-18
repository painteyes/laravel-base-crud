@extends('layouts.app')

@section('main_content')

<section>

    <div class="container">

        <h2>New comic</h2>

        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{ route('comics.store') }}" method="post">

            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="text" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="thumb">Image URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>

            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
            </div>

            <div class="form-group">
                <label for="sale_date">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
            </div>

            <div class="form-group">

                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"id="description" name="description" value="">{{old('description')}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

        </form>
        
    </div>

</section>
    

@endsection