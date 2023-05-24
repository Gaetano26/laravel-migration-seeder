@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-white my-3">Lista Films</h1>
    <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-5 my-5">
        @foreach ($movies as $movie )
                    <div class="col mt-3">
                       <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $movie->title }}</p>
                            <a class="btn btn-primary fs-6" href="{{route('movies.show', ['id'=> $movie->id])}}" role="button">Leggi Descrizione</a>
                          </div>
                       </div>


                    </div>

        @endforeach
    </div>

@endsection
