@extends('layouts.main')
@section('container')
<div class="row">
    <h2 class="mx-auto mb-5 text-decoration-underline">Artist Detail</h2>
    <!-- Song Card 1 -->
    <div class="col-md-4 mb-4">
        <div class="card bg-dark text-light">
            <div class="card-body">
                <h5 class="card-title">{{$artist->name}}</h5>
                <hr>
                <p class="card-text">Formed : <b>{{$artist->formed}}</b></p>
                <hr>
                <p class="card-text">Status : <b class="{{$artist->status == 'active' ? 'text-success' : 'text-danger'}}">{{$artist->status}}</b></p>
                <hr>
                <p class="card-text">Total Song : <a href="/song-artist/{{$artist->id}}"><b>{{$totalSong}}</b></a></p>
                <hr>
                <a href="#" onclick="history.back()" class="btn btn-danger my-3">Back</a>

            </div>
        </div>
    </div>

    </div>
@endsection