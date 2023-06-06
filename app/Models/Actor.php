<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function movies()
    {
        // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsToMany(Movie::class, 'actor_movie', 'actor_id', 'movie_id');
    }
    protected $fillable = [
        'name',
    ];
}
