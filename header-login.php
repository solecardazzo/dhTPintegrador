<?php
require_once("controladores/funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Indie+Flower|Pacifico|Permanent+Marker|Sarina&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/master.css">

    <title><?php print $pageTitle; ?></title>
  </head>
  <body>
    <header class="encabezado">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.php"><img class="imagen-logo" src="img/logo_baja.png" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navb" class="navbar-collapse collapse hide">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quienes-somos.php">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"><img src="archivos/<?=$_SESSION["avatar"];?>" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><span></span> Hola <?=$_SESSION["name"];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"><span class="fas fa-sign-out-alt"></span> Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
