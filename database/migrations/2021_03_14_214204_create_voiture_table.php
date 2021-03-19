<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voiture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code_voiture');
            $table->string('voiture_nom');
            $table->text('voiture_description');
            $table->string('voiture_image');
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
        Schema::dropIfExists('voiture');
    }
}
