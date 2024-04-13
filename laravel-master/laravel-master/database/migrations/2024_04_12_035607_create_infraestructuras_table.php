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
        Schema::create('infraestructuras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entidad_id');
            //$table->foreign('entidad_id')->references('id')->on('entidades')->onDelete('cascade');
            //configuracion
            $table->string('configuracion')->nullable();
            //area_total
            $table->decimal('area_total');
            //area_total_actividades
            $table->decimal('area_total_actividades');
            //superficie_total
            $table->decimal('superficie_total');
            //area_total_edificios
            $table->decimal('area_total_edificios');
            //porcentaje_espacios_abiertos
            $table->decimal('porcentaje_espacios_abiertos');
            //area_vegetal
            $table->decimal('area_vegetal');
            //porcentaje_vegetal
            $table->decimal('porcentaje_vegetal');
            //area_vegetacion_plantada
            $table->decimal('area_vegetacion_plantada');
            //porcentaje_vegetacion_plantada
            $table->decimal('porcentaje_vegetacion_plantada');
            //superficies_agua
            $table->decimal('superficies_agua');
            //porcentaje_superficies_agua
            $table->decimal('porcentaje_superficies_agua');
            //actividad_operacion_mantenimiento
            $table->decimal('actividad_operacion_mantenimiento');
            //porcentaje_actividad_operacion_mantenimiento
            $table->decimal('porcentaje_actividad_operacion_mantenimiento');
            //comentario
            $table->text('comentario')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infraestructuras');
    }
};
