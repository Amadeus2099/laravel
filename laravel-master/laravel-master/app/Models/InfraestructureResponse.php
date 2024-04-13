<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfrastructureResponse extends Model
{
    protected $fillable = [
        'configuracion',
        'area_total',
        'area_actividades',
        'superficie_planta_baja',
        'area_edificios',
        'area_cubierta_vegetal',
        'area_vegetacion_plantada',
        'area_absorcion_agua',
        'area_actividades_mantenimiento',
        'otra_informacion',
        'evidencia_cubierta_vegetal',
        'evidencia_vegetacion_plantada',
        'evidencia_absorcion_agua',
    ];

    // Si deseas definir relaciones con otros modelos, puedes hacerlo aquí
}
