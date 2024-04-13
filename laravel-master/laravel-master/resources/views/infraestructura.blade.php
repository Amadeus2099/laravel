<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criterio 1: Infraestructura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    *, ::before, ::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
        head {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0px;
            padding: 90px;
            background-color: #0000FF;
        }
        body {
            font-family: Arial,'FontAwesome', sans-serif;
            display: block;
            margin: 10px;
            padding: 45px;
            background-color: #000080;
        }
        .formulario{
            font-family: Arial, sans-serif;
            display: block;
            margin: 10px;
            padding: 5px;
            color: #5B8FFF;
            justify-content: center;
            background-color: #FFFFFF;
        }
        .formulario p{
            text-align: center;
            color: black;
        }
        h1 {
            color: #FFFFF;
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        .formulario input[type="radio"] {
            display: flex;
            width: 20px;
            height: 15px;
            margin-right: 10px;
            vertical-align: middle;
            transform: scale(1);
            float: left;
        }

        .formulario .res{
            background-color: yellow;
            padding: 0px;

        }

        input[type="radio"],
        input[type="number"],
        textarea {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        label {
            display: flex;
            margin-bottom: 5px;
            color: 
        }
        textarea {
            resize: vertical;
        }
        input[type="file"] {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        .img {
            position: absolute;
            top: 35px; /* Ajusta la posición vertical según tu preferencia */
            left: 10px; /* Ajusta la posición horizontal según tu preferencia */
            display: flex; /* Para que las imágenes estén en línea */
            align-items: center; /* Para alinear verticalmente las imágenes */
        }
        .img img {
            width: 200px; /* Ajusta el ancho de las imágenes según tu preferencia */
            height: auto; /* Mantiene la proporción de aspecto */
            margin-right: 10px; /* Espacio entre las imágenes */
        }
        .container-buttons {
      display: flex;
      justify-content: right;
      padding: 70px;
    }

    .container-buttons a {
      width: 70px;
      height: 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      color: #FFF;
      background-color: #000;
      text-decoration: none;
      overflow: hidden;
      font-size: 0.9rem;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, .9);
      margin-right: 20px;
    }
    .container-buttons a::before {
      content: "\f1ad";
      display: block;
      margin-bottom: 5px;
      transition: all .5s ease-in-out;
    }

    .container-buttons a:hover::before {
      margin-top: -37px;
    }

    .container-buttons a::after {
      content: "\f1ad";
      display: block;
    }
    .container-buttons .one {
      background-color: #000000;
      font-size: 0.6rem;
      
    }
    .container-buttons .two {
      background-color: #53afff;
    }

    .container-buttons .three {
      background-color: #ff8337;
    }

    .container-buttons .four {
      background-color: #e61c5d;
    }

    .container-buttons .five {
      background-color: #155263;
    }

    .container-buttons .six {
      background-color: #ffbd39;
    }

    .container-buttons .seven {
      background-color: #53afff;
    }

    .container-buttons .eight {
      background-color: #ff8337;
    }

    /* Additional buttons */
    .container-buttons .six::before, .container-buttons .six::after {
      content: '\f0ad';
    }

    .container-buttons .seven::before, .container-buttons .seven::after {
      content: '\f233';
    }

    .container-buttons .eight::before, .container-buttons .eight::after {
      content: '\f0c1';
    }
    </style>
    <div class="img">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        <img src="{{ asset('images/uaslp.png') }}" alt="logo uaslp">
    </div>
    <div class="container-buttons">
    <a href="{{ route('infraestructura.form') }}" class="one" target="_self">Infraestructura</a>
      <a href="#" class="two">Entorno</a>
      <a href="#" class="three">Transporte</a>
      <a href="#" class="four">Button 4</a>
      <a href="#" class="five">Button 5</a>
      <a href="#" class="six">Button 6</a>
      <a href="#" class="seven">Button 7</a>
      <a href="#" class="eight">Button 8</a>

  </div>


</head>
<body>
    @isset($success)
        <h1>{{$success}}</h1>
        <br>
    @else
        <h1>No se pudo guardar la información correctamente</h1>
        <br>
    @endisset

    <div class="formulario">
    <h1>Criterio 1: Infraestructura</h1>
    <p>Este criterio proporcionará información básica con respecto a la consideración de la universidad sobre espacios habitables y sostenibles. El objetivo es animar a las entidades a procurar la mejora e implementación de edificios inteligentes y sostenibles, aptos para todos los asistentes.</p>

    <!-- Formulario -->
    <form action="{{ route('infraestructura.store') }}" method="post" enctype="multipart/form-data">
    @csrf
         <!-- Pregunta 1 -->
        <p><strong>1.1¿Cuál de las siguientes opciones describe mejor la configuración de su entidad?</strong></p>
        <input type="radio" id="suburbano" name="configuracion" value="Suburbano" required>
        <label for="suburbano">Suburbano</label><br>
        <input type="radio" id="urbano" name="configuracion" value="Urbano">
        <label for="urbano">Urbano</label><br>
        <input type="radio" id="centro_ciudad" name="configuracion" value="Centro de la ciudad">
        <label for="centro_ciudad">Centro de la ciudad</label><br>
        <br>
        
        <!-- Pregunta 2 -->
        <p><strong>1.2¿Cuál es el área total de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_total" id="area_total" required><br>
        <br>

        <!-- Pregunta 3 -->
        <p><strong>1.3¿Cuál es el área total de su entidad destinada a actividades académicas y administrativas?</strong></p>
        <input type="number" step="0.1" name="area_actividades" id="area_actividades" required><br>
        <br>

        <!-- Pregunta 4 -->
        <p><strong>1.4¿Cuál es la superficie total de la planta baja de los edificios de su entidad?</strong></p>
        <input type="number" step="0.1" name="superficie_planta_baja" id="superficie_planta_baja" required><br>
        <br>

        <!-- Pregunta 5 -->
        <p><strong>1.5¿Cuál es el área total de edificios de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_edificios" id="area_edificios" required><br>
        <br>

        <!-- Pregunta 6 -->
        <p><strong>1.6¿Cuál es el porcentaje de espacios abiertos en su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <div class="res">
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje de área destinada a actividades académicas y administrativas: <span id="porcentaje">0</span>%</p>
        <input type="number" name="porcentaje_espacios_abiertos" id="porcentaje_input" required value="0" hidden><br>
        <div class="result"></div>
        </div>
        <br>

        <!-- Pregunta 7 -->
        <p><strong>1.7¿Cuál es el área de cubierta vegetal forestal de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_cubierta_vegetal" id="area_cubierta_vegetal" required><br>
        <br>
        <div class="res">
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.7:</strong></p>
        </div>
        <input type="file" name="evidencia_cubierta_vegetal" accept=".pdf,.doc"><br>
        <br>


        <!-- Pregunta 8 -->
        <p><strong>1.8¿Cuál es el porcentaje de cubierta vegetal forestal de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <div class="res">
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje cubierta vegetal forestal:<span id="porcentajeVF">0</span>%</p>
        <input type="number" name="porcentaje_vegetal" id="porcentaje_VF" required value="0" hidden><br>
        <div class="result"></div>
        </div> 
        <br>

        <!-- Pregunta 9 -->
        <p><strong>1.9¿Cuál es el área de vegetación plantada de su entidad?</strong></p>
        <input type="number" step="0.1" name="area_vegetacion_plantada" id="area_vegetacion_plantada" required><br>
        <br>
        <div class="res">
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.9:</strong></p>
        </div>
        <input type="file" name="evidencia_vegetacion_plantada" accept=".pdf,.doc"><br>
        <br>


        <!-- Pregunta 10 -->
        <p><strong>1.10¿Cuál es el porcentaje de vegetación plantada de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <div class="res">
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje de área vegetal plantada: <span id="porcentajeVP">0</span>%</p>
        <input type="number" name="porcentaje_vegetacion_plantada" id="porcentaje_VP" required value="0" hidden><br>
        <div class="result"></div>
         </div>
        <br>

        <!-- Pregunta 11 -->
        <p><strong>1.11 Si su entidad cuenta con superficies que permitan la absorción de agua, especifique el área en metros cuadrados.</strong></p>
        <input type="number" step="0.1" name="area_absorcion_agua"id="area_absorcion_agua" required><br>
        <br>
        <div class="res">
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.11:</strong></p>
        </div>
        <input type="file" name="evidencia_area_absorcion" accept=".pdf,.doc"><br>
        <br>

        <!-- Pregunta 12 -->
        <p><strong>1.12 ¿Cuál es el porcentaje de superficies que permitan la absorción de agua de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <div class="res">
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje de superficie de absorción: <span id="porcentajeSB">0</span>%</p>
        <input type="number" name="porcentaje_superficies_agua" id="porcentaje_SB" required value="0" hidden><br>
        <div class="result"></div>
         </div>
        <br>

        <!-- Pregunta 13 -->
        <p><strong>1.13 Si su entidad tuvo actividades de operación y mantenimiento en los edificios que la conforman, especifiqué el área ocupada por los mismos en metros cuadrados.</strong></p>
        <input type="number" step="0.1" name="area_actividades_mantenimiento" id="area_actividades_mantenimiento" required><br>
        <br>
        <div class="res">
        <p><strong>Adjunte su evidencia fotográfica en formato PDF o DOC y etiquételo con la clave 1.13:</strong></p>
        </div>
        <input type="file" name="evidencia_actividades_mantenimiento" accept=".pdf,.doc"><br>
        <br>

        <!-- Pregunta 14 -->
        <p><strong>1.14 ¿Cuál es el porcentaje de actividades de operación y mantenimiento de los edificios de su entidad?</strong></p>
        <!-- Este campo será autocalculado en el backend -->
        <div class="res">
        <p>No necesita ser respondido, se calculará automáticamente.</p>
        <p>Porcentaje de actividades de operación y mantenimiento de los edificios: <span id="porcentajeM">0</span>%</p>
        <input type="number" name="porcentaje_actividad_operacion_mantenimiento" id="porcentaje_M" required value="0" hidden><br>
        <div class="result"></div>
        </div>
        <br>

        <!-- Pregunta 15 -->
        <p><strong>1.15 Si su entidad cuenta con alguna otra información sobresaliente en el tema de Infraestructura, por favor, escriba al respecto.</strong></p>
        <textarea name="otra_informacion" rows="5" cols="50"></textarea><br>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <script>
        const area_total = document.querySelector("#area_total");
        const area_actividades = document.querySelector("#area_actividades");
        const superficie_planta_baja= document.querySelector("#superficie_planta_baja");
        const area_cubierta_vegetal= document.querySelector("#area_cubierta_vegetal");
        const area_vegetacion_plantada= document.querySelector("#area_vegetacion_plantada");
        const area_absorcion_agua= document.querySelector("#area_absorcion_agua");
        const area_edificios = document.querySelector("area_edificios");
        const area_actividades_mantenimiento = document.querySelector("area_actividades_mantenimiento");

        const result = document.querySelector("#porcentaje");
        const resultVF = document.querySelector("#porcentajeVF");
        const resultVP = document.querySelector("#porcentajeVP");
        const resultSB = document.querySelector("#porcentajeSB");
        const resultM = document.querySelector("#porcentajeM");

        const result_input = document.querySelector("#porcentaje_input");
        const result_inputVF = document.querySelector("#porcentaje_VF");
        const result_inputVP = document.querySelector("#porcentaje_VP");
        const result_inputSB = document.querySelector("#porcentaje_SB");
        const result_inputM = document.querySelector("#porcentaje_M");

        area_total.addEventListener("change", (event) => {
            const porcentaje = area_total.value * superficie_planta_baja.value / area_total.value * 100;
            const porcentajeVF= area_cubierta_vegetal.value/ area_total.value * 100;        
            const porcentajeVP= area_vegetacion_plantada.value/ area_total.value *100;
            const porcentajeSB= area_absorcion_agua.value/area_total.value *100;
            result_input.value = porcentaje;
            console.log(result_input.value);
            result.textContent = `${porcentaje}`;
            result_inputVF.value = porcentajeVF;
            console.log(result_inputVF.value);
            resultVF.textContent = `${porcentajeVF}`;
            result_inputVP.value = porcentajeVP;
            console.log(result_inputVP.value);
            resultVP.textContent = `${porcentajeVP}`;
            result_inputSB.value = porcentajeSB;
            console.log(result_inputSB.value);
            resultSB.textContent = `${porcentajeSB}`;
        });

        superficie_planta_baja.addEventListener("change", (event) => {
            const porcentaje = area_total.value * superficie_planta_baja.value / area_total.value * 100;
            result_input.value = porcentaje;
            console.log(result_input.value);
            result.textContent = `${porcentaje}`;
        });
    
        area_cubierta_vegetal.addEventListener("change",(event)=>{
            const porcentajeVF = area_cubierta_vegetal.value/area_total.value * 100;
            result_inputVF.value = porcentajeVF;
            console.log(result_inputVF.value);
            resultVF.textContent = `${porcentajeVF}`;
        });
        area_vegetacion_plantada.addEventListener("change",(event)=>{
            const porcentajeVP= area_vegetacion_plantada.value/ area_total.value *100;            
            result_inputVP.value = porcentajeVP;
            console.log(result_inputVP.value);
            resultVP.textContent = `${porcentajeVP}`;
        });
        area_vegetacion_plantada.addEventListener("change",(event)=>{
            const porcentajeVP= area_vegetacion_plantada.value/ area_total.value *100;            
            result_inputVP.value = porcentajeVP;
            console.log(result_inputVP.value);
            resultVP.textContent = `${porcentajeVP}`;
        });
        area_absorcion_agua.addEventListener("change",(event)=>{
            const porcentajeSB= area_absorcion_agua.value/area_total.value *100;
            result_inputSB.value = porcentajeSB;
            console.log(result_inputSB.value);
            resultSB.textContent = `${porcentajeSB}`;
        });
        area_edificios.addEventListener("change",(event)=>{
            const porcentajeM = area_actividades_mantenimiento.value/ area_edificios.value *100;
            result_inputM.value = porcentajeM;
            console.log(result_inputM.value);
            resultM.textContent = `${porcentajeM}`;
        });
        area_actividades_mantenimiento.addEventListener("change",(event)=>{
            const porcentajeM = area_actividades_mantenimiento.value/ area_edificios.value *100;
            result_inputM.value = porcentajeM;
            console.log(result_inputM.value);
            resultM.textContent = `${porcentajeM}`;
        });
    </script>
</body>
</html>
