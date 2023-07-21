@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Trains</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">All Trains</button>
                <button class="btn btn-danger">Past Trains</button>
                <button class="btn btn-warning">Today's Trains</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach ($trains as $train)
                    $train['operated_by'];
                @endforeach
            </div>
        </div>
    </div>
@endsection