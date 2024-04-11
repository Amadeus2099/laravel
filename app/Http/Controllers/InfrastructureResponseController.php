<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfrastructureResponse;

class InfrastructureResponseController extends Controller
{
    public function showForm()
    {
        return view('infraestructura');
    }
    public function store(Request $request)
    {
        // Validar los datos recibidos del formulario
        $validatedData = $request->validate([
            'configuracion' => 'required',
            'area_total' => 'required|numeric',
            'area_actividades' => 'required|numeric',
            'superficie_planta_baja' => 'required|numeric',
            'area_edificios' => 'required|numeric',
            'area_cubierta_vegetal' => 'required|numeric',
            'area_vegetacion_plantada' => 'required|numeric',
            'area_absorcion_agua' => 'required|numeric',
            'area_actividades_mantenimiento' => 'required|numeric',
            'otra_informacion' => 'nullable|string',
            'evidencia_cubierta_vegetal' => 'required|file|mimes:pdf,doc|max:2048',
            'evidencia_vegetacion_plantada' => 'required|file|mimes:pdf,doc|max:2048',
            'evidencia_absorcion_agua' => 'required|file|mimes:pdf,doc|max:2048',
        ]);

        // Procesar los archivos adjuntos y almacenarlos
        $evidenciaCubiertaVegetalPath = $request->file('evidencia_cubierta_vegetal')->store('evidencias');
        $evidenciaVegetacionPlantadaPath = $request->file('evidencia_vegetacion_plantada')->store('evidencias');
        $evidenciaAbsorcionAguaPath = $request->file('evidencia_absorcion_agua')->store('evidencias');

        // Crear una nueva instancia del modelo InfrastructureResponse con los datos validados y las rutas de los archivos
        $response = new InfrastructureResponse([
            'configuracion' => $validatedData['configuracion'],
            'area_total' => $validatedData['area_total'],
            'area_actividades' => $validatedData['area_actividades'],
            'superficie_planta_baja' => $validatedData['superficie_planta_baja'],
            'area_edificios' => $validatedData['area_edificios'],
            'area_cubierta_vegetal' => $validatedData['area_cubierta_vegetal'],
            'area_vegetacion_plantada' => $validatedData['area_vegetacion_plantada'],
            'area_absorcion_agua' => $validatedData['area_absorcion_agua'],
            'area_actividades_mantenimiento' => $validatedData['area_actividades_mantenimiento'],
            'otra_informacion' => $validatedData['otra_informacion'],
            'evidencia_cubierta_vegetal' => $evidenciaCubiertaVegetalPath,
            'evidencia_vegetacion_plantada' => $evidenciaVegetacionPlantadaPath,
            'evidencia_absorcion_agua' => $evidenciaAbsorcionAguaPath,
        ]);
 

        // Guardar el modelo en la base de datos
        $response->save();
        // Calcular porcentajes
    $porcentaje1 = $request->area_actividades / $request->area_total * 100;
    
    // Devolver los porcentajes a la vista
    return view('infraestructura', [
        'porcentaje1' => $porcentaje1,
        'success' => 'Respuestas y archivos adjuntos guardados exitosamente.'
    ]);
    
    
    }
}
