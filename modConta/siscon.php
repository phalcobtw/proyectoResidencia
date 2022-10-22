<?php
include "../validarSesion2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCOM- SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>  
  </head>
<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
        <div class="divlogo">
            <img src="../img/logosep.png" alt="logosep" class="logosep">
            <b class="titulo">SISCOM</b>
        </div>
        </div>
    </header>
                         <!-- todo el menu -->
                         <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                          <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-md-center" id="main_nav">
                            <ul class="navbar-nav">
                              <li class="nav-item dropdown" id="dropdown"> 
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Catalogos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="capturaContrarecibos.php">Personal</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Movimientos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="">Anticipos</a></li>
                                  <li> <a class="dropdown-item" href="">Comprobaciones</a></li>
                                  <li> <a class="dropdown-item" href="">Verificar</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Traspaso</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="">Verificaci&oacute; de Informaci&oacute;n</a></li>
                                  <li> <a class="dropdown-item" href="">Traspaso a Contabilidad</a></li>
                                  <li> <a class="dropdown-item" href="">FReporte del Corto</a></li>
                                </ul>
                              </li>
                                <li class="nav-item dropdown" id="dropdown">
                                      <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" id="mr-1">Reportes</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Generales</a></li>
                                        <li><a class="dropdown-item" href="#">Anticipos</a></li>
                                        <li><a class="dropdown-item" href="#">Fuente de Ingresos</a></li>
                                        <li><a class="dropdown-item" href="#">Partidas</a></li>                                        
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                      <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" id="mr-1">Utilerias</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
                                        <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
                                        <li><a class="dropdown-item" href="#">Control de Usuarios</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar</a></li>
                                        <li><a class="dropdown-item" href="#">Par&aacute;metros</a></li>
                                        <li><a class="dropdown-item" href="#">Cierre de Ejercicio</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar</a></li>                                        
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="../seleccionModulos.php" >Salir</a>
                              </li>
                            </ul>
                          </div>
                          <!-- navbar-collapse.// -->
                          </div>
                          <!-- container-fluid.// -->
                          </nav>
                        <!-- aqui termina -->
</body>
<script src="../js/navbar.js"></script>
</html>