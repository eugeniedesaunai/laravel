<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\Director;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class HollywoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ici on envoie la data dans la bdd
        $actors = Actor::factory()->count(100)->create();
        $directors = Director::factory()->count(30)->create();


        Movie::factory()
            ->count(50)
            ->state(new Sequence(
                fn () => ['director_id' => $directors->random()]
            ))
            ->create()
            ->each(
                fn ($movie) => $movie->actors()->attach($actors->random(rand(5, 10)))
            );
    }
}
