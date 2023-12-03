<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'image', 'nom', 'description', 'price', 'duree', 'trailer', 'Necessites'
    ];

    
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
