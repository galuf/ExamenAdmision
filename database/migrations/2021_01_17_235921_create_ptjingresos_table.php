<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtjingresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptjingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universidad_id')->references('id')->on('universidads');
            $table->foreignId('admision_id')->references('id')->on('admisions');
            $table->foreignId('area_id')->references('id')->on('areas');
            $table->foreignId('carrera_id')->references('id')->on('carreras');
            $table->float('porc_max');
            $table->float('porc_min');
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
        Schema::dropIfExists('ptjingresos');
    }
}
