<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistApiController extends Controller
{
    public function index()
    {
        $artists = Artist::get();
        return response()->json([
            "status" => "success",
            "message" => "Successfully get all artist data.",
            "data" => $artists
        ]);
    }
    public function findArtist(Artist $artist)
    {
        return response()->json([
            "status" => "success",
            "message" => "Successfully get all artist data.",
            "data" => $artist
        ]);
    }

    public function store(Request $request)
    {
        if($request) {
            $artist = Artist::create([
                'name' => $request->name,
                'formed' => $request->formed,
                'status' => $request->status
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Successfully add artist data.",
                "data" => $artist
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to add artist data.",
            "data" => null
        ]);
    }
    public function updateArtist(Request $request, $id)
    {
        if($request) {
            Artist::where('id', $id)->update([
                'name' => $request->name,
                'formed' => $request->formed,
                'status' => $request->status
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Successfully updated artist data.",
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to updated artist data.",
            "data" => null
        ]);
    }
    public function deleteArtist(Request $request, $id)
    {
        if($request) {
            Artist::where('id', $id)->delete();

            return response()->json([
                "status" => "success",
                "message" => "Successfully deleted artist data.",
            ]);
        }
        return response()->json([
            "status" => "success",
            "message" => "Failed to deleted artist data.",
            "data" => null
        ]);
    }
}
