@extends('layouts.app')

@section('title', 'List of trains')

@section('main-content')
<div class="container my-5">
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-between">
        @foreach ($todayTrain as $train)
            <div class="card col-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $train->train_code }}</h5>
                        </div>
                        <div>
                            @if ($train->canceled === 0 && $train->delayed === 0)
                            <div class="badge rounded-pill text-bg-success">On Time</div>
                            @elseif ($train->canceled === 0 && $train->delayed === 1)
                                <div class="badge rounded-pill text-bg-warning">Delayed</div>
                            @endif
                            @if ($train->canceled === 1)
                            <div class="badge rounded-pill text-bg-danger">Cancelled</div>
                            @endif
                        </div>
                    </div>
                <h6 class="card-subtitle mb-2 text-muted">{{ $train->company }}</h6>
                <p class="card-text">this train departs form <span class="fw-bold">{{ $train->depart_station }}</span> and arrives to <span class="fw-bold">{{$train->arrive_station}}</span></p>
                <button class="btn btn-secondary mt-2">BUY TICKETS</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection