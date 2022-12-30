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
        Schema::create('ids_endevina_songs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jocs_id');
            $table->foreign('jocs_id')->references('id')->on('jocs');            
            $table->unsignedBigInteger('endevina_songs_id');
            $table->foreign('endevina_songs_id')->references('id')->on('endevina_songs');            
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
        Schema::dropIfExists('ids_generades_endevina_songs');
    }
};
