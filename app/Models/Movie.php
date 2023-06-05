<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsTo(Director::class);
    }

    public function actors()
    { // belongsTo ou belongToMany : la  clé étrangère appartient à cette classe
        return $this->belongsToMany(Actor::class);
    }
}
