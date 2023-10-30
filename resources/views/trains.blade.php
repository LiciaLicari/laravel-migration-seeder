@extends('layouts.app')

@section('title', 'Welcome to FakeTrain')

@section('content')

    <div class="container py-5">
        <div class="row row-cols-3 g-4">
            @forelse($trains as $train)
                <div class="col">
                    <div class="card h-100 shadow d-flex justify-content-center p-3">

                        <h5 class="mx-auto">Code: {{ $train->train_code }}</h5>

                        <h4 class="mx-auto">{{ $train->company }}</h4>

                        <h6 class="mx-auto">n° of wagons: {{ $train->train_coachload }}</h6>
                        <div class="wrapper d-flex justify-content-between">
                            <div class="card-body border-end">
                                <h6>DEPARTURE</h6>
                                <h6>{{ $train->departure_station }} at {{ $train->departure_time }}</h6>
                            </div>
                            <div class="card-body">
                                <h6>ARRIVAL</h6>
                                <h6>{{ $train->arrival_station }} at {{ $train->arrival_time }}</h6>

                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p>No trains available</p>
            @endforelse
        </div>
    </div>

@endsection
