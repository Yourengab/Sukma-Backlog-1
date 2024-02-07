@extends('layouts.main')
@section('container')
<h2 class="mx-auto mb-5 text-decoration-underline text-center">Song by Artist</h2>
<a href="#" onclick="history.back()" class="btn btn-danger my-3">Back</a>
<div class="row">
    <!-- Song Card 1 -->
    @foreach ($songs as $song)
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-light">
            <div class="card-body">
            <h5 class="card-title">{{$song->title}} - <a href="/artist/{{$song->artist_id}}" class="text-light"><u><b>{{$song->artist->name}}</b></u></a></h5>
                <p class="card-text">{{$song->album}}</p>
                <hr>
                <p class="card-text">Genre : <b>{{$song->genre}}</b></p>
                <a href="/detail/{{$song->id}}" class="btn btn-success">Detail</a>
            </div>
        </div>
    </div>
    @endforeach

    </div>
@endsection