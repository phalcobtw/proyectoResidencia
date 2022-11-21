<?php
include "../validarSesion2.php";
include "../bd_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISBAN- SIATEC</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <header class="p-3 bg-primary text-white">
    <div class="divheader">
      <div class="divlogo">
        <img src="../img/logosep.png" alt="logosep" class="logosep">
        <b class="titulo">SISBAN</b>
      </div>
    </div>
  </header>
  <!-- todo el menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Cheques</a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="#">Emisi&oacute;n de Cheques en Espera</a></li>
              <li> <a class="dropdown-item" href="emisionChequesEspecial.php">Emisi&oacute;n de Cheques Especiales</a></li>
              <li> <a class="dropdown-item" href="#">Cancelaciones &raquo; </a>
                <ul class="submenu dropdown-menu">
                  <li><a class="dropdown-item" href="cancelacionDeCheques.php">Cancelacion de Cheques</a></li>
                  <li><a class="dropdown-item" href="cancelacionChequesMeses.php">Cancelacion de Cheques de Meses Anteriores</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown"> Depositos</a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="depositos.php">Dep&oacute;sitos Bancarios</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Traspasos</a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="traspasos.php">Traspasos entre Cuentas</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Catalogos</a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="catalogobanks.php">Bancos</a></li>
              <li> <a class="dropdown-item" href="catalogoCuentas.php">Cuentas</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Reportes</a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="#">Depositos</a></li>
              <li> <a class="dropdown-item" href="#">Cheques</a></li>
              <li> <a class="dropdown-item" href="#">Saldos</a></li>
              <li> <a class="dropdown-item" href="#">Prueba de Impresor</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" id="dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Utilerias</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
              <li><a class="dropdown-item" href="#">Cierre de Ejercicio</a></li>
              <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
              <li><a class="dropdown-item" href="#">Reconstruir Saldos</a></li>
              <li><a class="dropdown-item" href="../utilerias/controlUsuarios.php">Control de Usuarios</a></li>
              <li><a class="dropdown-item" href="#">Configurar Impresora</a></li>
              <li><a class="dropdown-item" href="#">Par&aacute;metros Sistema</a></li>
              <li><a class="dropdown-item" href="#">Par&aacute;metros Poliza-Cheque</a></li>
              <li><a class="dropdown-item" href="../utilerias/configITLM.php">Configurar</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../seleccionModulos.php">Salir</a>
          </li>
        </ul>
      </div>
      <!-- navbar-collapse.// -->
    </div>
    <!-- container-fluid.// -->
  </nav>
  <!-- aqui termina -->
  <div class="container">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    Emisi&oacute;n de Cheques en Espera
    </nav>
    <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SOLICITANTE</th>
                    <th scope="col">CUENTA</th>
                    <th scope="col">IMPORTE</th>
                    <th scope="col">FUENTE</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">EDITAR</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM cheques WHERE estadopoliza = 'Pendiente'";
                $result = mysqli_query($conn, $sql);
                //ESTADO Y SOLICITANTE DEJAR PENDIENTE AUN NO SE SABE DE DONDE SALEN SUS DATOS
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        <td>' . $row["folio"] . '</td>
                        <td>' . $row["claveproveedor"] . '</td>  
                        <td>$' . $row["importe"] . '</td>
                        <td>' . $row["fuenteingresos"] . '</td>
                        <td>' . $row["estadopoliza"] . '</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                        </button></td>                        
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
                                    <div class="table-wrapper">
                                        <table class="table table-sm table-hover table-striped palco-table">
                                            <thead class="table-dark">
                                                <th>
                                                    Cuenta de Cargo
                                                </th>
                                                <th>
                                                    Descripcion
                                                </th>
                                                <th>
                                                    Seleccionar
                                                </th>
                                            </thead>
                                            <tbody class="palco-tbody">
                                                <?php
                                                $sqlcar = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) BETWEEN 6100 AND 6900";
                                                $resultcar = mysqli_query($conn, $sqlcar);
                                                while ($rowcargo = mysqli_fetch_array($resultcar)) {
                                                    echo '
                                <tr>
                                    <td class="cuencartd">' . $rowcargo["cuenta"] . '</td>
                                    <td class="cuencardesctd">' . $rowcargo["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark cuencarbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                }
                                                echo '
                            
                            '
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row text-center">
                                    <label for="" class="form-label label-txt">Datos Bancos</label>
                    <div class="col-6 mt-2">
                        <label class="form-label">Clave:</label>
                        <input type="text" class="form-control" name="fuenteing" readonly>
                    </div>
                    <div class="col-6 mt-2">
                        <label class="form-label">Cuenta:</label>
                        <input type="text" class="form-control" name="poliza" readonly>
                    </div>
                    <div class="col-6 mt-2">
                        <label class="form-label">Banco:</label>
                        <input type="text" class="form-control" name="fuenteing" readonly>
                    </div>
                    <div class="col-6 mt-2">
                        <label class="form-label">Saldo:</label>
                        <input type="text" class="form-control" name="poliza" readonly>
                    </div>
                </div>
                                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
</body>
<script src="../js/capContrarecibos.js"></script>
</html>