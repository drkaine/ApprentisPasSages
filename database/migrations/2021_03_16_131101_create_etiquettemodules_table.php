<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtiquettemodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquettemodules', function (Blueprint $table) {
            $table->unsignedBigInteger("module_id");
            $table->unsignedBigInteger("etiquette_id");
            $table->timestamps();
            $table->primary(["module_id","etiquette_id"]);
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('etiquette_id')->references('id')->on('etiquettes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquettemodules');
    }
}
