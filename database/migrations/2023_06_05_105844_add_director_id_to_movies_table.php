<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDirectorIdToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ci dessous la methode table prend en premier parametre le nom de la table qu'on va modifier, le second parametre est une fonction de callback dans laquelle on va modifier ce qu'on veut dans la table desiré
        Schema::table('movies', function (Blueprint $table) {
            // Ici on ajoute la colonne 'director_id' a la table movies. la methode foreignId() sert a a definir une colonne comme une clé etrangere ce qui veut dire que cette colonne doit correspondre a une clé primaire d'une autre table
            // Le fait d'appeller la colonne 'director_id' a son importance car grace a la methode constrained() laravel comprend que lorsqu'on met le suffixe _id ce qu'il y a avant fait reference a une autre table de ma bdd, donc ici la table director
            $table->foreignId('director_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            // Ici on supprime juste la colonne qu'on a créée dans la methode up() (director_id)
            $table->dropColumn('director_id');
        });
    }
}
