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
        Schema::create('jocs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('team1name');
            $table->string('team2name');
            $table->string('team3name');            
            $table->integer('team1points')->default(0);
            $table->integer('team2points')->default(0);
            $table->integer('team3points')->default(0);
            $table->boolean('prova1Completed')->default(false);
            $table->boolean('prova2Completed')->default(false);
            $table->boolean('prova3Completed')->default(false);
            $table->boolean('prova4Completed')->default(false);      
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
        Schema::dropIfExists('jocs');
    }
};
