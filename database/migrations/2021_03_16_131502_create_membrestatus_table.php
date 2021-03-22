<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembrestatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membrestatuts', function (Blueprint $table) {
            $table->unsignedBigInteger("membre_id");
            $table->unsignedBigInteger("statut_id");
            $table->timestamps();
            $table->primary(["statut_id","membre_id"]);
            $table->foreign('membre_id')->references('id')->on('membres');
            $table->foreign('statut_id')->references('id')->on('statuts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membrestatus');
    }
}
