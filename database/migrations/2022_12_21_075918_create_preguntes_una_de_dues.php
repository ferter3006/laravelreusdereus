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
        Schema::create('preguntas_una_de_dues', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->string('resposta1');
            $table->string('resposta2');
            $table->string('resposta3');
            $table->string('font');
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
        Schema::dropIfExists('preguntes_una_de_dues');
    }
};
