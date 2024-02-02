<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongApiController extends Controller
{
    // API
    public function index()
    {
        $songs = Song::get();
        return response()->json([
            "status" => "success",
            "message" => "Successfully get all songs data.",
            "data" => $songs
        ]);
    }
    public function findSong(Song $song)
    {
        if ($song) {

            return response()->json([
                "status" => "success",
                "message" => "Successfully get all songs data.",
                "data" => $song
            ]);
        }
        return response()->json([
            "status" => "error",
            "message" => "Song not found.",
            "data" => null

        ], 404);

    }
    public function store(Request $request)
    {
        if ($request) {
            $song = Song::create([
                'title' => $request->title,
                'artist_id' => $request->artist_id,
                'album' => $request->album,
                'genre' => $request->genre,
                'duration' => $request->duration
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Successfully add song data.",
                "data" => $song
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to add song.",
            "data" => null
        ]);

    }
    public function updateSong(Request $request, $id)
    {
        if ($request) {
            Song::where('id', $id)->update([
                'title' => $request->title,
                'artist_id' => $request->artist_id,
                'album' => $request->album,
                'genre' => $request->genre,
                'duration' => $request->duration
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Successfully updated song data.",
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to update song data.",
            "data" => null
        ]);

    }

    public function deleteSong(Request $request, $id)
    {
        if ($request) {
            Song::where('id', $id)->delete();

            return response()->json([
                "status" => "success",
                "message" => "Successfully deleted song data.",
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to delete song data.",
            "data" => null
        ]);

    }
}
