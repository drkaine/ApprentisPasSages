<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupsdecoeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupsdecoeurs', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("categoriecoupsdecoeur_id");
            $table->timestamps();
            $table->text("lien");
            $table->string("nom");
            $table->text("description");
            $table->foreign('categoriecoupsdecoeur_id')->references('id')->on('categoriecoupsdecoeurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupsdecoeurs');
    }
}
