<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagalbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagalbums', function (Blueprint $table) {
            $table->unsignedBigInteger("module_id")->nullable();
            $table->unsignedBigInteger("photo_id");
            $table->string("nom_album");
            $table->timestamps();
            $table->primary(["nom_album","photo_id"]);
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('nom_album')->references('nom')->on('albums');
            $table->foreign('photo_id')->references('id')->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagalbums');
    }
}
