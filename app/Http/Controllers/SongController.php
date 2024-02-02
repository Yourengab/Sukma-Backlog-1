<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Artist;

class SongController extends Controller
{
    public function homePage()
    {
        return view('home', [
            "title" => "Songs",
            "active" => true
        ]);
    }
    public function songPage()
    {
        return view('song', [
            "title" => "Songs",
            "active" => true,
            "songs" => Song::all()
        ]);

    }
    public function detailPage(Song $song)
    {
        return view('detail', [
            "title" => "Song Detail",
            "active" => true,
            "songs" => $song
        ]);

    }
    public function artistPage(Artist $artist)
    {
        return view('artist', [
            "title" => "Artist Detail",
            "active" => true,
            "artist" => $artist,
            "totalSong" => Song::where('artist_id', $artist->id)->count()
        ]);

    }
}
