<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criterio 1: Infraestructura</title>
</head>
<body>
    <h1>Criterio 1: Infraestructura</h1>
    <p>Este criterio proporcionará información básica con respecto a la consideración de la universidad sobre espacios habitables y sostenibles. El objetivo es animar a las entidades a procurar la mejora e implementación de edificios inteligentes y sostenibles, aptos para todos los asistentes.</p>
    
    <!-- Formulario -->
    <form action="{{ route('infraestructura.store') }}" method="post" enctype="multipart/form-data">
    @csrf
         <!-- Pregunta 1 -->
        <p><strong>¿Cuál de las siguientes opciones describe mejor la configuración de su entidad?</strong></p>
        <input type="radio" id="suburbano" name="configuracion" value="Suburbano" required>
        <label for="suburbano">Suburbano</label><br>
        <input type="radio" id="urbano" name="configuracion" value="Urbano">
        <label for="urbano">Urbano</label><br>
        <input type="radio" id="centro_ciudad" name="configuracion" value="Centro de la ciudad">
        <label for="centro_ciudad">Centro de la ciudad</label><br>
        <br>
        
        <!-- Pregunta 2 -->
        <p><strong>¿Cuál es el área total de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_total" required><br>
        <br>

        <!-- Pregunta 3 -->
        <p><strong>¿Cuál es el área total de su entidad destinada a actividades académicas y administrativas?</strong></p>
        <input type="number" step="0.1" name="area_actividades" required><br>
        <br>

        <!-- Pregunta 4 -->
        <p><strong>¿Cuál es la superficie total de la planta baja de los edificios de su entidad?</strong></p>
        <input type="number" step="0.1" name="superficie_planta_baja" required><br>
        <br>

        <!-- Pregunta 5 -->
        <p><strong>¿Cuál es el área total de edificios de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_edificios" required><br>
        <br>

        <!-- Pregunta 6 -->
        <p><strong>¿Cuál es el porcentaje de espacios abiertos en su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje de área destinada a actividades académicas y administrativas: {{ $porcentaje1 }}%</p>
        <br>

        <!-- Pregunta 7 -->
        <p><strong>¿Cuál es el área de cubierta vegetal forestal de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_cubierta_vegetal" required><br>
        <br>
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.7:</strong></p>
        <input type="file" name="evidencia_cubierta_vegetal" accept=".pdf,.doc"><br>
        <br>


        <!-- Pregunta 8 -->
        <p><strong>¿Cuál es el porcentaje de cubierta vegetal forestal de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <br>

        <!-- Pregunta 9 -->
        <p><strong>¿Cuál es el área de vegetación plantada de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_vegetacion_plantada" required><br>
        <br>
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.9:</strong></p>
        <input type="file" name="evidencia_cubierta_vegetal" accept=".pdf,.doc"><br>
        <br>


        <!-- Pregunta 10 -->
        <p><strong>¿Cuál es el porcentaje de vegetación plantada de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <br>

        <!-- Pregunta 11 -->
        <p><strong>Si su entidad cuenta con superficies que permitan la absorción de agua, especifique el área en metros cuadrados.</strong></p>
        <input type="number" step="0.1" name="area_absorcion_agua" required><br>
        <br>
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.11:</strong></p>
        <input type="file" name="evidencia_cubierta_vegetal" accept=".pdf,.doc"><br>
        <br>

        <!-- Pregunta 12 -->
        <p><strong>¿Cuál es el porcentaje de superficies que permitan la absorción de agua de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <br>

        <!-- Pregunta 13 -->
        <p><strong>Si su entidad tuvo actividades de operación y mantenimiento en los edificios que la conforman, especifiqué el área ocupada por los mismos en metros cuadrados.</strong></p>
        <input type="number" step="0.1" name="area_actividades_mantenimiento" required><br>
        <br>
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.13:</strong></p>
        <input type="file" name="evidencia_cubierta_vegetal" accept=".pdf,.doc"><br>
        <br>

        <!-- Pregunta 14 -->
        <p><strong>¿Cuál es el porcentaje de actividades de operación y mantenimiento de los edificios de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <br>

        <!-- Pregunta 15 -->
        <p><strong>Si su entidad cuenta con alguna otra información sobresaliente en el tema de Infraestructura, por favor, escriba al respecto.</strong></p>
        <textarea name="otra_informacion" rows="5" cols="50"></textarea><br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
