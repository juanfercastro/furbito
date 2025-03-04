<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jugadors', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('nombre', 50);
            $table->string('apellidos', 150);
            $table->integer('dorsal');
            $table->date('f_nac');
            $table->unsignedBigInteger('id_equipo')->nullable();
            $table->foreign('id_equipo')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
