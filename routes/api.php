<?php

use App\Http\Controllers\SongApiController;
use App\Http\Controllers\ArtistApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Get all song
Route::get("/songs", [SongApiController::class,"index"]);
// Find one song
Route::get("/songs/{song}", [SongApiController::class,"findSong"]);
// Add song
Route::post("/songs", [SongApiController::class,"store"]);
// Update Song
Route::put("/songs/{id}", [SongApiController::class,"updateSong"]);
// Delete Song
Route::delete("/songs/{id}", [SongApiController::class,"deleteSong"]);

// Get all artist
Route::get("/artists", [ArtistApiController::class,"index"]);
// Find one song
Route::get("/artists/{artist}", [ArtistApiController::class,"findArtist"]);
// Add song
Route::post("/artists", [ArtistApiController::class,"store"]);
// Update Song
Route::put("/artists/{id}", [ArtistApiController::class,"updateArtist"]);
// Delete Song
Route::delete("/artists/{id}", [ArtistApiController::class,"deleteArtist"]);
