<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActioncataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actioncatalogues', function (Blueprint $table) {
            $table->unsignedBigInteger("action_id");
            $table->unsignedBigInteger("catalogue_id");
            $table->timestamps();
            $table->primary(["action_id","catalogue_id"]);
            $table->foreign('action_id')->references('id')->on('actions');
            $table->foreign('catalogue_id')->references('id')->on('catalogues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actioncatalogues');
    }
}
