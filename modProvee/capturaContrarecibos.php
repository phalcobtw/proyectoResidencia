<?php
include "../bd_conn.php";
include "../validarSesion2.php";

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $nombreusuario = $_POST['nombreusuario'];
    $contra = $_POST['password'];

    $sqlins = "INSERT INTO `usuarios`
    (`id`, `nombre`, `nombreusuario`, `password`) VALUES (NULL,'$nombre','$nombreusuario','$contra')";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: controlUsuarios.php?msg=Usuario Registrado con éxito.");
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
                <b class="titulo">SISPRO</b>
            </div>
        </div>
        <!-- todo el menu -->
    </header>
    <!-- todo el menu -->
    <ul class="menu">
        <li>Movimientos
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Captura de ContraRecibos</a></li>
                <li><a href="" class="menulinks">Pago de Facturas</a></li>
            </ul>
        </li>
        <li>Traspaso
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Verificar Informaci&oacute;n</a></li>
                <li><a href="" class="menulinks">Realizar las Transacciones</a></li>
            </ul>
        </li>
        <li>Reportes
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Facturas Pendientes</a></li>
                <li><a href="" class="menulinks">Facturas Pagadas</a></li>
                <li><a href="" class="menulinks">Facturas por Depto.</a></li>
            </ul>
        </li>
        <li>Utilerias
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Cambio de Mes</a></li>
                <li><a href="" class="menulinks">Indexar Archivos</a></li>
                <li><a href="" class="menulinks">Control de Usuarios</a></li>
                <li><a href="" class="menulinks">Configurar Impresora</a></li>
                <li><a href="" class="menulinks">Par&aacute;metros de Conexi&oacute;n CONTRED</a></li>
                <li><a href="" class="menulinks">Par&aacute;metros Retenci&oacute;n a Prov.</a></li>
                <li><a href="" class="menulinks">Cierre de Ejercicio</a></li>
                <li><a href="" class="menulinks">Configurar Datos Generales</a></li>
            </ul>
        </li>
        <li><a href="../seleccionModulos.php" class="menulinks">Salir</a></li>
    </ul>
    <!-- aqui termina -->
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Mantenimiento de Contra-Recibos
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
                    <th scope="col">FOLIO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">CUENTA</th>
                    <th scope="col">PROVEEDOR</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /* date_default_timezone_set('America/Mazatlan');
                $date = date('Y/m');
                echo "$date"; */
                ?>
                <?php

                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["nombreusuario"] . '</td>
                        <td>' . $row["nombre"] . '</td>
                        <td><a href="editarUsuario.php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
                        <td><a href="eliminarUsuario.php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>  
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    <b>TODO: FORM DE CONTRARECIBOS CON SELECT/DROPDOWN LIST</b>
    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Agregar Nuevo Usuario</div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="col">
                    <label class="form-label">Folio:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col">
                    <label class="form-label">Fecha:</label>
                    <input type="text" class="form-control" name="nombreusuario">
                </div>
                <div class="col">
                    <label class="form-label">Clave del Proveedor:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
            </form>
        </div>
    </div>
</body>

</html>