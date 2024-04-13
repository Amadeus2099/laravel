<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Metric</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *, ::before, ::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'FontAwesome', sans-serif;
      background-color: #bcdde;
    }

    .navbar {
      background-color: #000080;
      overflow: hidden;
    }

    .container-buttons {
      display: flex;
      justify-content: center; /* Centro los botones horizontalmente */
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

    .text {
      display: flex;
      justify-content: right;
      text-decoration: none;
    }

    .text a {
      color: #FFFFFF;
      margin: 4px;
      text-decoration: none;
      font-size: .9em;
      opacity: 0.7;
      transition: 0.5s;
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
    .container-buttons .six::before,
    .container-buttons .six::after {
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
  </style>
</head>
<body>

<div class="navbar">
  <div class="container-buttons">
    <div class="img">
      <img src="{{ asset('images/logo.png') }}" alt="logo">
      <img src="{{ asset('images/uaslp.png') }}" alt="logo uaslp">
    </div>
  </div>
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
</body>
</html>
