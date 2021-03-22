<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->text("description")->nullable();
            $table->string("img")->nullable();
            $table->time("temps")->nullable();
            $table->text("materiel")->nullable();
            $table->text("projetPeda")->nullable();
            $table->string("lieu")->nullable();
            $table->string("format")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
