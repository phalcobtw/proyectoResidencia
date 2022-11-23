<?php
include "../bd_conn.php";
include "../validarSesion2.php";

if (isset($_POST['submit'])) {
  $clave = $_POST['clave'];
  $banco = $_POST['banco'];
  $cuenta = $_POST['cuenta'];
  $fuente = $_POST['fuente'];
  $descfuente = $_POST['descfuente'];
  $contable = $_POST['contable'];
  $ctacontdesc = $_POST['ctacontdesc'];
  $msgcheque = $_POST['msgcheque'];
  $saldominimo = $_POST['saldominimo'];

  $sqlins = "INSERT INTO `catalogocuenta`(`id`, `clave`, `banco`, `cuenta`, `fuente`, 
  `descripcionfuente`, `ctacontable`, `ctacontabledesc`, `msgcheque`, `saldominimo`) 
  VALUES ('[value-1]','$clave','$banco','$cuenta','$fuente','$descfuente',
  '$contable','$ctacontdesc','$msgcheque','$saldominimo')";
  $result = mysqli_query($conn, $sqlins);

  if ($result) {
    header("location: catalogoCuentas.php?msg=Cuenta registrada con éxito.");
  }
}
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
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    Catalogo de Cuentas
  </nav>
  <div class="container">
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
          <th scope="col">CLAVE</th>
          <th scope="col">CUENTA</th>
          <th scope="col">FUENTE</th>    
          <th scope="col">CTA. CONTABLE</th>
          <th scope="col">EDITAR</th>
          <th scope="col">ELIMINAR</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = "SELECT * FROM catalogocuenta";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
          echo '
                    <tr>
                        <td>' . $row["clave"] . '</td>      
                        <td>' . $row["cuenta"] . '</td>
                        <td>' . $row["fuente"] . '</td>
                        <td>' . $row["ctacontable"] . '</td>
                        <td><a href="editarCuentas.php?clave=' . $row["clave"] . '&cuenta=' . $row["cuenta"] . '" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
                        <td><a href="eliminarCuentas.php?clave=' . $row["clave"] . '&cuenta=' . $row["cuenta"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>  
                    </tr>
                    ';
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="container" style="margin-bottom: 35px;">
    <div class="text-center mb-4 fs-4">Agregar Nueva Cuenta</div>
    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row text-center">
          <div class="col-6">
            <label class="form-label">Clave:</label>
            <input type="text" class="form-control" name="clave" id="clavebanco">
          </div>
          <!-- <div class="col-4">
            <label class="form-label">Cuenta:</label>
            <input type="text" class="form-control" name="cuenta">
          </div> -->
          <div class="col-6">
            <label class="form-label">Banco:</label>
            <input type="text" class="form-control" name="banco" id="nombrebanco">
          </div>
        </div>
        <label for="" class="form-label label-txt fst-italic fw-light mt-2">Al clickear el boton "Agregar" se colocaran automaticamente los datos seleccionados en los campos de arriba</label>
        <div class="table-wrapper">
          <table class="table table-sm table-hover table-striped palco-table text-center">
            <thead class="table-dark">
              <th>
                Clave
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
              $sqlban = "SELECT * from `catalogobanco`";
              $resultban = mysqli_query($conn, $sqlban);
              while ($rowcargo = mysqli_fetch_array($resultban)) {
                echo '
                                <tr>
                                    <td class="cuenbantd">' . $rowcargo["clave"] . '</td>
                                    <td class="cuenbandesctd">' . $rowcargo["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark bancoButton">Agregar</button></td> 
                                </tr>
                                ';
              }
              echo '
                            
                            '
              ?>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-6">
            <label class="form-label">Cuenta:</label>
            <input type="text" class="form-control" name="cuenta">
          </div>
          <div class="col-2">
            <label class="form-label">Fuente:</label>
            <input type="text" class="form-control" name="fuente">
          </div>
          <div class="col-4">
            <label class="form-label">Descripcion:</label>
            <input type="text" class="form-control" name="descfuente">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-6">
            <label class="form-label">Cta. Contable:</label>
            <input type="text" class="form-control" name="contable">
          </div>
          <div class="col-6">
            <label for="" class="form-label">Descripcion:</label>
            <input type="text" class="form-control" name="ctacontdesc">
          </div>
        </div>
        <div class="col mt-2">
          <label for="" class="form-label">Mensaje en Cheque:</label>
          <input type="text" class="form-control" name="msgcheque">
        </div>
        <div class="col-6 mt-2">
          <label for="" class="form-label">Saldo Minimo:</label>
          <input type="text" class="form-control" name="saldominimo">
        </div>
        <button type="submit" class="btn btn-success mt-3" name="submit" style="margin-bottom: 30px;">Guardar</button>
      </form>
    </div>
  </div>
</body>
<script src="../js/scCuentas.js"></script>

</html>