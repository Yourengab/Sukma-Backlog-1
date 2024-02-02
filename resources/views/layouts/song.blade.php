@extends('layouts.main')
@section('container')
<div class="row">
    <!-- Song Card 1 -->
    @foreach ($songs as $song)
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-light">
            <div class="card-body">
                <h5 class="card-title">{{$song->title}} - <u><b>{{$song->artist}}</b></u></h5>
                <p class="card-text">{{$song->album}}</p>
                <hr>
                <p class="card-text">Genre : <b>{{$song->genre}}</b></p>
                <a href="#" class="btn btn-success">Detail</a>
            </div>
        </div>
    </div>
    @endforeach

    </div>
@endsection