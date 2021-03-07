<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiexamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miexamens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->references('id')->on('examens');
            $table->foreignId('usuario_id')->references('id')->on('users');
            $table->foreignId('carrera_id')->references('id')->on('carreras');
            $table->float('mi_puntaje');
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
        Schema::dropIfExists('miexamens');
    }
}
