<?php
include "../bd_conn.php";
include "../validarSesion2.php";

if (isset($_POST['submit'])) {
    $clave = $_POST['clave'];
    $cuenta = $_POST['cuenta'];
    $fuente = $_POST['fuente'];
    $folio = $_POST['folio'];
    $contable = $_POST['contable'];

    $sqlins = "INSERT INTO `catalogocuenta`
    (`clave`, `cuenta`, `fuente`, `folio`, `contable`) VALUES ('$clave','$cuenta','$fuente','$folio','$contable')";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>  
  </head>
<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
        <div class="divlogo">
            <img src="../img/logosep.png" alt="logosep" class="logosep">
        </div>
        </div>
    </header>
                         <!-- todo el menu -->
                         <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                          <div class="container-fluid">
                          <a class="navbar-brand" href="#">SISBAN</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link active" href="../seleccionModulos.php" >Salir</a>
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
            '.$msg.'
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
                    <th scope="col">FOLIO</th>
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
                        <td>' . $row["folio"] . '</td>
                        <td>' . $row["contable"] . '</td>
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
            <div class="row">
            <div class="col">
                    <label class="form-label">Clave:</label>
                    <input type="text" class="form-control" name="clave">
                </div>
            <div class="col">
                    <label class="form-label">Cuenta:</label>
                    <input type="text" class="form-control" name="cuenta">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Fuente:</label>
                    <input type="text" class="form-control" name="fuente">
                </div>
            <div class="col">
                    <label class="form-label">Folio:</label>
                    <input type="text" class="form-control" name="folio">
                </div>
            </div>
                <div class="col">
                    <label class="form-label">Cta. Contable:</label>
                    <input type="text" class="form-control" name="contable">
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
            </form>
        </div>
    </div>
</body>

</html>