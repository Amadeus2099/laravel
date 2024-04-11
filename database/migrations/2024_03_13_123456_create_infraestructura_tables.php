<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
    public function up()
    {
        // Tabla "entidades"
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->timestamps();
        });

        // Tabla "datos_infraestructura"
        Schema::create('datos_infraestructura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entidad_id');
            $table->foreign('entidad_id')->references('id')->on('entidades')->onDelete('cascade');
            $table->decimal('area_total');
            $table->decimal('area_actividades_administrativas');
            $table->decimal('area_planta_baja_edificios');
            $table->decimal('area_total_edificios');
            $table->decimal('porcentaje_espacios_abiertos');
            $table->decimal('area_cubierta_vegetal_forestal');
            $table->decimal('porcentaje_cubierta_vegetal_forestal');
            $table->decimal('area_vegetacion_plantada');
            $table->decimal('porcentaje_vegetacion_plantada');
            $table->decimal('area_absorcion_agua');
            $table->decimal('porcentaje_superficies_absorcion_agua');
            $table->decimal('area_actividades_operacion_mantenimiento_edificios');
            $table->decimal('porcentaje_actividades_operacion_mantenimiento_edificios');
            $table->text('comentario')->nullable();
            $table->timestamps();
        });

        // Tabla "documentos"
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->string('ruta_archivo');
            $table->unsignedBigInteger('datos_infraestructura_id');
            $table->foreign('datos_infraestructura_id')->references('id')->on('datos_infraestructura')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('datos_infraestructura');
        Schema::dropIfExists('entidades');
    }
};
