<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Models\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SongController::class, 'homePage']);
Route::get('/song', [SongController::class, 'songPage']);
Route::get('/detail/{song}', [SongController::class, 'detailPage']);
Route::get('/artist/{artist}', [SongController::class, 'artistPage']);
