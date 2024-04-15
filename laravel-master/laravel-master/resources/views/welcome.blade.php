<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Metric</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Estilos para el head */
    head {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0px;
            padding: 90px;
            background-color: #000080;
        }

    /* Estilos para el cuerpo del documento */
    body {
      font-family: 'FontAwesome', sans-serif;
      background-color: #bcdde; /* Color de fondo del cuerpo */
      margin: 0; /* Eliminar márgenes predeterminados */
      padding: 0; /* Eliminar relleno predeterminado */
    }

    /* Estilos para la barra de navegación */
    .navbar {
      background-color: #000080; /* Color de fondo de la barra de navegación */
      overflow: hidden;
      position: relative; /* Añadido para posicionar correctamente los elementos hijos */
    }

    /* Estilos para los contenedores de botones */
    .container-buttons {
      display: flex;
      justify-content: center;
      padding: 20px 0; /* Ajusta el padding según tu preferencia */
    }

    /* Estilos para los botones */
    .container-buttons a {
      width: 120px;
      height: 120px;
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
    .container-buttons .six::before,.container-buttons .six::after {
      content: '\f0ad';
    }

    .container-buttons .seven::before,
    .container-buttons .seven::after {
      content: '\f233';
    }

    .container-buttons .eight::before,
    .container-buttons .eight::after {
      content: '\f0c1';
    }

    /* Estilos para los botones de login y sign in */
    .auth-buttons {
      position: absolute;
      top: 50px; /* Ajusta la distancia desde la parte superior */
      right: 10px; /* Ajusta la distancia desde la derecha */
    }

    .auth-button {
      color: #fff;
      text-decoration: none;
      padding: 10px 40px; /* Ajusta el padding según tu preferencia */
      border: none;
      background-color: transparent;
      font-size: 1.2rem;
    }

    .auth-button.square {
      border-radius: 7; /* Hace que los botones sean cuadrados */
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
  </style>
  <div class="img">
    <img src="{{ asset('images/logo.png') }}" alt="logo">
    <img src="{{ asset('images/uaslp.png') }}" alt="logo uaslp">
  </div>
  <div class="auth-buttons">
    <a href="#" class="auth-button">Login</a>
    <a href="#" class="auth-button">Sign In</a>
  </div>
</head>
<body>

<!-- Barra de navegación -->
<div class="navbar">
  <div class="auth-buttons">
    <a href="{{ route('login') }}" class="auth-button">Login</a>
    <a href="{{ route('register') }}" class="auth-button">Sign In</a>
  </div>
  <div class="img">
    <img src="{{ asset('images/logo.png') }}" alt="logo">
    <img src="{{ asset('images/uaslp.png') }}" alt="logo uaslp">
  </div>
</div>

<!-- Contenedor para la primera fila de botones -->
<div class="container-buttons">
  <a href="{{ route('infraestructura.form') }}" class="one" target="_self">Infraestructura</a>
  <a href="#" class="two">Entorno</a>
  <a href="#" class="three">Transporte</a>
  <a href="#" class="four">Energía y cambio climático</a>
</div>

<!-- Contenedor para la segunda fila de botones -->
<div class="container-buttons">
  <a href="#" class="five">Consumo responsable</a>
  <a href="#" class="six">Residuos</a>
  <a href="#" class="seven">Agua</a>
  <a href="#" class="eight">Educación e investigación</a>
</div>

</body>
</html>
