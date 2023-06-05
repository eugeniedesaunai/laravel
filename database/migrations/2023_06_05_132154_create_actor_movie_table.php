<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //permet de créer la table pivot (table relation)
        //permet d'ajouter l'attribut director_id à la table movies
        //le constrained dit que la clé étrangère fait référence à la table présente avant l'id "actor_id" donc içi actor
        // cascadeOnDelete permet de supprimer un élément en cascade, ( si on supprime un film, tous les films associé seront supprimer)

        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('movie_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_movie');
    }
}
