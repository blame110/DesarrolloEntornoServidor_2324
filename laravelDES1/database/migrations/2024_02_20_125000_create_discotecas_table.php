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
        Schema::create('discotecas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->integer('capacidad');
            $table->integer('precio');
            //campo para la clave externa
            $table->unsignedBigInteger('gerente_id');
            //definicion de clave externa
            $table->foreign('gerente_id')->references('id')->on('gerentes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discoteca');
    }
};
