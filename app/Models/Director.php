<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    public function movies()
    { // hasMany ou hasOne : à une clé étrangère
        return $this->hasMany(Movie::class);
    }
    protected $fillable = [
        'name',
    ];
}
