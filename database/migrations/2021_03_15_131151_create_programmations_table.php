<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime("dateDebut");
            $table->datetime("dateFin")->nullable();
            $table->integer("nbPersonnesPrevues")->size(11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programmations');
    }
}
