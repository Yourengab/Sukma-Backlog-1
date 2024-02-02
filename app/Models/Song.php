<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'artist_id', 'album', 'genre', 'duration'];
    protected $guarded = ['id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
