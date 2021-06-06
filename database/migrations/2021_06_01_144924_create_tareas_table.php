<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->String('Nombre');
            $table->String('Puesto');
            $table->String('Funcion');
            $table->String('Empleado');
            $table->String('Seccion');
            $table->timestamps();

            $table->unsignedBigInteger('trabajo_id')->nullable();
            $table->foreign('trabajo_id')
            ->references ('id')
            ->on ('trabajos')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
