<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        //this-> cette classe, belongsTo-> chaque instance de Movie appartient à un seul réalisateur
        return $this->belongsTo(Director::class, 'actor_movie', 'actor_id', 'movie_id');
    }

    public function actors()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        // this-> cette classe, belongsTo-> chaque instance de Movie appartient à un plusieurs acteur
        return $this->belongsToMany(Actor::class);
    }

    /* ce que l'on a le droit de remplir */
    protected $fillable = [
        'name',
        'description',
        'duration',
        'release',
        'director_id',
    ];


    /* protected $guarded = ["id", 'created_at', 'updated_at']; */
}
