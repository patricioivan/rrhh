<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('castigos', function (Blueprint $table) {
            $table->id();
            $table->string('infraccion');
            $table->string('observacion');
            $table->string('castigo_recibido');
            $table->boolean('suspension');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_terminacion')->nullable();
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
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
        Schema::dropIfExists('castigos');
    }
}
