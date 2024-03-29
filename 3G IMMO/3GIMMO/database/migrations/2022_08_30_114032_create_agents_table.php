<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //* En utilisant php artisant migrate, il exécute ce code qui va créer la table avec les différents champs
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id('agent_ID');
            $table->string('nom_agent');
            $table->string('prenom_agent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
