<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ids_una_de_dues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jocs_id');
            $table->foreign('jocs_id')->references('id')->on('jocs');            
            $table->unsignedBigInteger('preguntas_una_de_dues_id');
            $table->foreign('preguntas_una_de_dues_id')->references('id')->on('preguntas_una_de_dues');            
            $table->boolean('falta_respondre')->default(true);  
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
        Schema::dropIfExists('ids_generades_una_de_dues');
    }
};
