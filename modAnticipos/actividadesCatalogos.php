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
        <!-- todo el menu -->
    </header>
    <ul class="menu">
                            <li>Movimientos       
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Polizas</a></li>
                                <li><a href="" class="menulinks">Imprimir Polizas</a></li>
                               </ul>
                            </li>
                            <li>Reportes       
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Catalogos</a></li>
                                <li><a href="" class="menulinks">Tradicionales</a></li>
                                <li><a href="" class="menulinks">Gastos</a></li>
                                <li><a href="" class="menulinks">Analisis</a></li>
                                <li><a href="" class="menulinks">Informes Reales</a></li>
                                <li><a href="" class="menulinks">Diario General</a></li>
                               </ul>
                            </li>
                            <li>Catalogos       
                                <ul class="dropdownmenu">
                                <li><a href="cuentaCatalogos.php" class="menulinks">Cuentas</a></li>
                                <li><a href="programasCatalogos.php" class="menulinks">Programas</a></li>
                                <li><a href="actividadesCatalogos.php" class="menulinks">Actividades</a></li>
                                <li><a href="partidasCatalogos.php" class="menulinks">Partidas</a></li>
                                <li><a href="departamentoCatalogos.php" class="menulinks">Departamentos</a></li>
                               </ul>
                            </li>
                            <li>Presupuestos      
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Cuentas</a></li>
                                <li><a href="" class="menulinks">Gastos</a></li>
                                <li><a href="" class="menulinks">Calendarizado</a></li>
                               </ul>
                            </li>
                            <li>Utilerias        
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Cambio de Mes</a></li>
                                <li><a href="" class="menulinks">Fecha del Sistema</a></li>
                                <li><a href="" class="menulinks">Cierre de Ejercicio</a></li>
                                <li><a href="" class="menulinks">Reconstruir Saldos</a></li>
                                <li><a href="" class="menulinks">Revisi&oacute;n de Informaci&oacute;n</a></li>
                                <li><a href="" class="menulinks">Indexar Archivos</a></li>
                                <li><a href="" class="menulinks">Vincular Cuentas</a></li>
                                <li><a href="" class="menulinks">Control de Usuarios</a></li>
                                <li><a href="" class="menulinks">Configurar Impresora</a></li>
                                <li><a href="" class="menulinks">Configurar Sistema</a></li>
                                <li><a href="" class="menulinks">Opciones de Respaldo</a></li>
                               </ul>
                            </li>
                            <li><a href="../seleccionModulos.php" class="menulinks">Salir</a></li>
                        </ul>
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


</html>