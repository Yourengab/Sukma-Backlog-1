<?php

namespace App\Models;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function song()
    {
        return $this->hasMany(Song::class);
    }

}
