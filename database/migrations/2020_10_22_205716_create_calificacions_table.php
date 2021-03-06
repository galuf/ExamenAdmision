<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universidad_id')->references('id')->on('universidads');
            $table->foreignId('admision_id')->references('id')->on('admisions');
            $table->foreignId('asignatura_id')->references('id')->on('asignaturas');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->float('ponderacion');
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
        Schema::dropIfExists('calificacions');
    }
}
