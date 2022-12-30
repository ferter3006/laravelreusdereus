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
        Schema::create('respostes_quantes_saps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('preguntas_quantes_saps_id');
            $table->foreign('preguntas_quantes_saps_id')->references('id')->on('preguntas_quantes_saps');                        
            
            $table->string('resposta');
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
        Schema::dropIfExists('respostes');
    }
};
