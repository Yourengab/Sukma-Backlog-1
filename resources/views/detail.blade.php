@extends('layouts.main')
@section('container')
<div class="row">
    <h2 class="mx-auto mb-5 text-decoration-underline">Song Detail</h2>
    <!-- Song Card 1 -->
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-light">
            <div class="card-body">
                <h5 class="card-title">{{$songs->title}} - <a href="/artist/{{$songs->artist_id}}" class="text-light"><u><b>{{$songs->artist->name}}</b></u></a></h5>
                <hr>
                <p class="card-text">Album : <b>{{$songs->album}}</b></p>
                <hr>
                <p class="card-text">Genre : <b>{{$songs->genre}}</b></p>
                <hr>
                <p class="card-text">Duration : <b>{{$songs->duration}} Min</b></p>
                <hr>
                <a href="#" onclick="history.back()" class="btn btn-danger my-3">Back</a>
            </div>
        </div>
    </div>

    </div>
@endsection