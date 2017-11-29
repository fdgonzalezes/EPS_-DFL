<?php require_once('conexion.php');

$conn = new Conexion();
$llamarMetodo = $conn->Conectar(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
  </head>

  <body>


      <div class="masthead">
          <br>
        <h3 class="text-muted">EPS - DFL</h3>
        <br>
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
            <li class="nav-item">
                <a class="nav-link" href="./Nosotros.php">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Contactenos.php">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Registrarse.php">Resgistrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ingresar.php">Ingresar</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
