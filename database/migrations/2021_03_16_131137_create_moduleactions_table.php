<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduleactions', function (Blueprint $table) {
            $table->unsignedBigInteger("module_id");
            $table->unsignedBigInteger("action_id");
            $table->timestamps();
            $table->primary(["action_id","module_id"]);
            $table->foreign('action_id')->references('id')->on('actions');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduleactions');
    }
}
