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
        Schema::table('movies', function (Blueprint $table) {
            //permet d'ajouter l'attribut director_id à la table movies
            //le nullable permet qu'il ne soit jamais null
            //le constrained dit que la clé étrangère fait référence à la table présente avant "table_id" donc içi director
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
            $table->dropColumns('director_id');
        });
    }
}
