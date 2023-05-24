@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-white my-3">Lista treni</h1>
    <div class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-2 my-5">
        @foreach ($trains as $train )
                    <div class="col mt-3">
                       <div class="card">
                         <div class="card-head text-center bg-danger">
                            <h1 class="card-title">{{$train->company}}</h1>
                         </div>
                        <div class="card-body">
                            <p class="card-text"><span class="fw-bold">Partenza:</span> {{ $train->departure_station }}</p>
                            <p class="card-text"><span class="fw-bold">Arrivo:</span> {{ $train->arrival_station }}</p>
                            <p class="card-text"><span class="fw-bold">Orario Partenza:</span> {{ $train->departure_time }}</p>
                            <p class="card-text"><span class="fw-bold">Orario Arrivo:</span> {{ $train->arrival_time }}</p>
                            <p class="card-text"><span class="fw-bold">Codice Treno:</span> {{ $train->train_code }}</p>
                            <p class="card-text"><span class="fw-bold">Carrozze:</span> {{ $train->carriages}}</p>
                            @if ($train->in_time)
                            <p class="card-text"><span class="fw-bold">In Orario</span></p>
                            @else
                            <p class="card-text"><span class="fw-bold">In ritardo</span></p>
                            @endif

                          </div>
                       </div>


                    </div>

        @endforeach
    </div>

@endsection
