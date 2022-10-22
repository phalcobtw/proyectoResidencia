<?php
include "../bd_conn.php";
include "../validarSesion2.php";

if (isset($_POST['submit'])) {
    $actividad = $_POST['actividad'];
    $descripcion = $_POST['descripcion'];

    $sqlins = "INSERT INTO `actividadcatalogo`
    (`id`, `actividad`, `descripcion`) VALUES (NULL, '$actividad','$descripcion')";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: actividadesCatalogos.php?msg=Actividad registrada con éxito.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTRED- SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
            <div class="divlogo">
                <img src="../img/logosep.png" alt="logosep" class="logosep">
                <b class="titulo">CONTRED- SIATEC</b>
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
                                  <li> <a class="dropdown-item" href="#">Polizas</a></li>
                                  <li> <a class="dropdown-item" href="#">Imprimir Polizas</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Reportes</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="">Catalogos</a></li>
                                  <li> <a class="dropdown-item" href="">Tradicionales</a></li>
                                  <li> <a class="dropdown-item" href="">Gastos</a></li>
                                  <li> <a class="dropdown-item" href="">Analisis</a></li>
                                  <li> <a class="dropdown-item" href="">Informes Reales</a></li>
                                  <li> <a class="dropdown-item" href="">Diario General</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Catalogos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="cuentaCatalogos.php">Cuentas</a></li>
                                  <li> <a class="dropdown-item" href="programasCatalogos.php">Programas</a></li>
                                  <li> <a class="dropdown-item" href="actividadesCatalogos.php">Actividades</a></li>
                                  <li> <a class="dropdown-item" href="partidasCatalogos.php">Partidas</a></li>
                                  <li> <a class="dropdown-item" href="departamentoCatalogos.php">Departamentos</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                  <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Presupuestos</a>
                                  <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="">Cuentas</a></li>
                                    <li> <a class="dropdown-item" href="">Gastos</a></li>
                                    <li> <a class="dropdown-item" href="">Calendarizado</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown" id="dropdown">
                                      <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" id="mr-1">Utilerias</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
                                        <li><a class="dropdown-item" href="#">Fecha del Sistema</a></li>
                                        <li><a class="dropdown-item" href="#">Cierre de Ejercicio</a></li>
                                        <li><a class="dropdown-item" href="#">Reconstruir Saldos</a></li>
                                        <li><a class="dropdown-item" href="">Revisi&oacute;n de Informaci&oacute;n</a></li>
                                        <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
                                        <li><a class="dropdown-item" href="#">Vincular Cuentas</a></li>
                                        <li><a class="dropdown-item" href="#">Control de Usuarios</a></li>
                                        <li><a class="dropdown-item" href=".">Configurar Impresora</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar Sistema</a></li>
                                        <li><a class="dropdown-item" href=".">Opciones de Respaldo</a></li>                                      
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
        Catalogo de Actividad
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
                    
                    <th scope="col">ACTIVIDADES</th>
                    <th scope="col">DESCRIPCI&Oacute;N</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM actividadcatalogo";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        
                        <td>' . $row["actividad"] . '</td>
                        <td>' . $row["descripcion"] . '</td>
                        <td><a href="editarActividades.php?id=' . $row["id"] .'" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
                        <td><a href="eliminarActividades.php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>  
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Agregar Nueva Actividad</div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="col">
                    <label class="form-label">Actividades:</label>
                    <input type="text" class="form-control" name="actividad">
                </div>
            <div class="col">
                    <label class="form-label">Descripci&oacute;n:</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
            </form>
        </div>
    </div>
</body>
<script src="../js/navbar.js"></script>
</html>