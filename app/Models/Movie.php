<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function directors()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        //this-> cette classe, belongsTo-> chaque instance de Movie appartient à un seul réalisateur
        return $this->belongsTo(Director::class);
    }

    public function actors()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        // this-> cette classe, belongsTo-> chaque instance de Movie appartient à un plusieurs acteur
        return $this->belongsToMany(Actor::class);
    }
}
