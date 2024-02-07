<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Artist;
use App\Models\Song;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artist::create(
            [
                'name' => 'Queen',
                'formed' => '1970',
                'status' => 'inactive',
            ]
        );
        Artist::create(
            [
                'name' => 'Michael Jackson',
                'formed' => '1964',
                'status' => 'inactive',
            ]
        );
        Artist::create(
            [
                'name' => 'John Lennon',
                'formed' => '1960',
                'status' => 'inactive',
            ]
        );
        Artist::create(
            [
                'name' => 'The Beatles',
                'formed' => '1960',
                'status' => 'inactive',
            ]
        );
        Artist::create(
            [
                'name' => 'Coldplay',
                'formed' => '1997',
                'status' => 'active',
            ]
        );

        Song::create(
            [
                'title' => 'Bohemian Rhapsody',
                'artist_id' => '1',
                'genre' => 'Rock',
                'album' => 'A Night at the Opera',
                'duration' => "3.55",
            ]
        );
        Song::create(
            [
                'title' => 'Killer Queen',
                'artist_id' => '1',
                'genre' => 'Rock',
                'album' => 'Sheer Heart Attack',
                'duration' => "3.55",
            ]
        );
        Song::create(
            [
                'title' => 'Billie Jean',
                'artist_id' => '2',
                'genre' => 'Pop',
                'album' => 'Thriller',
                'duration' => "2.94",
            ]
        );
        Song::create(
            [
                'title' => 'Imagine',
                'artist_id' => '3',
                'genre' => 'Rock',
                'album' => 'Imagine',
                'duration' => "2.84",
            ]
        );
        Song::create(
            [
                'title' => 'I Want to Hold Your Hand',
                'artist_id' => '4',
                'genre' => 'Rock',
                'album' => 'Meet The Beatles!',
                'duration' => "4.49",
            ]
        );
        Song::create(
            [
                'title' => 'Viva La Vida',
                'artist_id' => '5',
                'genre' => 'Pop',
                'album' => 'Viva La Vida or Death and All His Friends',
                'duration' => "3.31",
            ]
        );
        Song::create(
            [
                'title' => 'The Scientist',
                'artist_id' => '5',
                'genre' => 'Pop',
                'album' => 'The Scientist',
                'duration' => "5.54",
            ]
        );


    }
}
