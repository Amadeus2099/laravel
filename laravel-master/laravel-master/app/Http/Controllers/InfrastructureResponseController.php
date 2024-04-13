<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\InfrastructureResponse;
use App\Models\Infraestructura;
use App\Models\documento;

class InfrastructureResponseController extends Controller
{
    public function showForm()
    {
        return view('infraestructura');
    }
    public function store(Request $r)
    {

        //Guardado de informacion del formulario de infraestructura
        $formulario = new Infraestructura();

        //valor por default para que no dé error
        $formulario->entidad_id = 10;

        $formulario->configuracion = $r->configuracion;
        $formulario->area_total = $r->area_total;
        $formulario->area_total_actividades = $r->area_actividades;
        $formulario->superficie_total = $r->superficie_planta_baja;
        $formulario->area_total_edificios = $r->area_edificios;
        $formulario->porcentaje_espacios_abiertos = $r->porcentaje_espacios_abiertos;
        $formulario->area_vegetal = $r->area_cubierta_vegetal;
        $formulario->porcentaje_vegetal = $r->porcentaje_vegetal; //valor por default, CAMBIAR
        $formulario->area_vegetacion_plantada = $r->area_vegetacion_plantada;
        $formulario->porcentaje_vegetacion_plantada = $r->porcentaje_vegetacion_plantada; //valor por default, CAMBIAR
        $formulario->superficies_agua = $r->area_absorcion_agua;
        $formulario->porcentaje_superficies_agua = $r->porcentaje_superficies_agua; //valor por default, CAMBIAR
        $formulario->actividad_operacion_mantenimiento = $r->area_actividades_mantenimiento;
        $formulario->porcentaje_actividad_operacion_mantenimiento = $r->porcentaje_actividad_operacion_mantenimiento; //valor por default, CAMBIAR
        $formulario->comentario = $r->otra_informacion;

        $formulario->save();
        
        //Guardado de los documentos del formulario, con el id del formulario y en su propia carpeta
        //Cambiar Entidades/id/ por el id de la entidad a la que pertenece
        //Para documento con evidencia vegetal forestal
        $f_evidencia_vegetal = new documento();
        if ($r->hasFile('evidencia_cubierta_vegetal')) {
            request()->validate([
                'evidencia_cubierta_vegetal'  => 'required|mimes:doc,docx,pdf|max:5242880',
            ]);

            //Aqui se crea las carpetas para guardar los documentos de la entidad perteneciente
            $path = $r->file('evidencia_cubierta_vegetal')->storeAs(
                'Entidades/id/Infraestructura/Evidencia de cubierta vegetal', $r->file('evidencia_cubierta_vegetal')->getClientOriginalName(),'public'
            );
            $url = Storage::url($path);

            $f_evidencia_vegetal->ruta_archivo=$url;
            $f_evidencia_vegetal->tipo_documento = $r->file('evidencia_cubierta_vegetal')->extension();
            $f_evidencia_vegetal->infraestructura_id = $formulario->id;
            $f_evidencia_vegetal->save();
        }

        $f_vegetacion_plantada = new documento();
        if ($r->hasFile('evidencia_vegetacion_plantada')) {
            request()->validate([
                'evidencia_vegetacion_plantada'  => 'required|mimes:doc,docx,pdf|max:5242880',
            ]);

            //Aqui se crea las carpetas para guardar los documentos de la entidad perteneciente
            $path = $r->file('evidencia_vegetacion_plantada')->storeAs(
                'Entidades/id/Infraestructura/Evidencia de vegetacion plantada', $r->file('evidencia_vegetacion_plantada')->getClientOriginalName(),'public'
            );
            $url = Storage::url($path);

            $f_vegetacion_plantada->ruta_archivo=$url;
            $f_vegetacion_plantada->tipo_documento = $r->file('evidencia_vegetacion_plantada')->extension();
            $f_vegetacion_plantada->infraestructura_id = $formulario->id;
            $f_vegetacion_plantada->save();
        }

        $f_evidencia_superficies_absorcion_agua = new documento();
        if ($r->hasFile('evidencia_area_absorcion')) {
            request()->validate([
                'evidencia_area_absorcion'  => 'required|mimes:doc,docx,pdf|max:5242880',
            ]);

            //Aqui se crea las carpetas para guardar los documentos de la entidad perteneciente
            $path = $r->file('evidencia_area_absorcion')->storeAs(
                'Entidades/id/Infraestructura/Evidencia de superficies que permitan absorcion de agua', $r->file('evidencia_area_absorcion')->getClientOriginalName(),'public'
            );
            $url = Storage::url($path);

            $f_evidencia_superficies_absorcion_agua->ruta_archivo=$url;
            $f_evidencia_superficies_absorcion_agua->tipo_documento = $r->file('evidencia_area_absorcion')->extension();
            $f_evidencia_superficies_absorcion_agua->infraestructura_id = $formulario->id;
            $f_evidencia_superficies_absorcion_agua->save();
        }

        $f_evidencia_actividades_mantenimiento = new documento();
        if ($r->hasFile('evidencia_actividades_mantenimiento')) {
            request()->validate([
                'evidencia_actividades_mantenimiento'  => 'required|mimes:doc,docx,pdf|max:5242880',
            ]);

            //Aqui se crea las carpetas para guardar los documentos de la entidad perteneciente
            $path = $r->file('evidencia_actividades_mantenimiento')->storeAs(
                'Entidades/id/Infraestructura/Evidencia de actividades de operacion y mantenimiento de edificios', $r->file('evidencia_actividades_mantenimiento')->getClientOriginalName(),'public'
            );
            $url = Storage::url($path);

            $f_evidencia_actividades_mantenimiento->ruta_archivo=$url;
            $f_evidencia_actividades_mantenimiento->tipo_documento = $r->file('evidencia_actividades_mantenimiento')->extension();
            $f_evidencia_actividades_mantenimiento->infraestructura_id = $formulario->id;
            $f_evidencia_actividades_mantenimiento->save();
        }

        // Devolver los porcentajes a la vista
        return view('infraestructura', [
            //'porcentaje1' => $porcentaje1,
            'success' => 'Respuestas y archivos adjuntos guardados exitosamente.'
        ]);

        // Validar los datos recibidos del formulario
        /*$validatedData = $request->validate([
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
        //'porcentaje1' => $porcentaje1,
        'success' => 'Respuestas y archivos adjuntos guardados exitosamente.'
        ]);*/
    
    
    }
}
