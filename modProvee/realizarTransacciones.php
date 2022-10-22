<?php
include "../validarSesion2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISPRO- SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
        <div class="divlogo">
            <img src="../img/logosep.png" alt="logosep" class="logosep">
            <b class="titulo">SISPRO</b>
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
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Movimientos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="capturaContrarecibos.php">Captura de ContraRecibos</a></li>
                                  <li> <a class="dropdown-item" href="#">Pago de Facturas</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Traspaso</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="">Verificar Informaci&oacute;n</a></li>
                                  <li> <a class="dropdown-item" href="realizarTransacciones.php">Realizar las Transacciones</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Reportes</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="">Facturas Pendientes</a></li>
                                  <li> <a class="dropdown-item" href="">Facturas Pagadas</a></li>
                                  <li> <a class="dropdown-item" href="">Facturas por Depto.</a></li>
                                </ul>
                              </li>
                                <li class="nav-item dropdown" id="dropdown">
                                      <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" id="mr-1">Utilerias</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
                                        <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
                                        <li><a class="dropdown-item" href="#">Control de Usuarios</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar Impresora</a></li>
                                        <li><a class="dropdown-item" href="">Par&aacute;metros de Conexi&oacute;n CONTRED</a></li>
                                        <li><a class="dropdown-item" href="#">Par&aacute;metros Retenci&oacute;n a Prov.</a></li>
                                        <li><a class="dropdown-item" href="#">Cierrre de Ejercicio</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar Datos Generales</a></li>
                                                                        
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
                        <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Traspaso de Informaci&oacute;n</div>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">FOLIO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">POLIZA</th>
                </tr>
                <tr>
                    <td>9022</td>
                    <td>2022/9/19</td>
                    <td>11DP</td>
                </tr>
                <tr>
                    <td>9023</td>
                    <td>2022/9/19</td>
                    <td>12DP</td>
                </tr>
                <tr>
                    <td>9024</td>
                    <td>2022/9/20</td>
                    <td>13DP</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>
<script src="../js/navbar.js"></script>
</html>