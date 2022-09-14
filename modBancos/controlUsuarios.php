<?php
include "../bd_conn.php";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
            <div class="divlogo">
                <img src="../img/logosep.png" alt="logosep" class="logosep">
                <b class="titulo">SISBAN</b>
            </div>
        </div>
        <!-- todo el menu -->
    </header>
    <ul class="menu">
        <li>Cheques
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Emisi&oacute;n de Cheques en Espera</a></li>
                <li><a href="" class="menulinks"> Emisi&oacute;n de Cheques Especiales</a></li>
                <li><a href="" class="menulinks"> Cancelaciones </a></li>
            </ul>
        </li>
        <li>Depositos
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Dep&oacute;sitos Bancarios </a></li>
            </ul>
        </li>
        <li>Traspasos
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Traspasos entre Cuentas</a></li>
            </ul>
        </li>
        <li>Catalogos
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Cuentas</a></li>
            </ul>
        </li>
        <li>Reportes
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Depositos</a></li>
                <li><a href="" class="menulinks">Cheques</a></li>
                <li><a href="" class="menulinks">Saldos</a></li>
                <li><a href="" class="menulinks">Prueba de Impresor</a></li>
            </ul>
        </li>
        <li>Utilerias
            <ul class="dropdownmenu">
                <li><a href="" class="menulinks">Cambio de Mes</a></li>
                <li><a href="" class="menulinks">Cierre de Ejercicio</a></li>
                <li><a href="" class="menulinks">Indexar Archivos</a></li>
                <li><a href="" class="menulinks">Reconstruir Saldos</a></li>
                <li><a href="controlUsuarios.php" class="menulinks">Control de Usuarios</a></li>
                <li><a href="" class="menulinks">Configurar Impresora</a></li>
                <li><a href="" class="menulinks">Par&aacute;metros Sistema</a></li>
                <li><a href="" class="menulinks">Par&aacute;metros Poliza-Cheque</a></li>
                <li><a href="" class="menulinks">Configurar</a></li>
            </ul>
        </li>
        <li><a href="../seleccionModulos.html" class="menulinks">Salir</a></li>
    </ul>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-2">
        Control de Usuarios
    </nav>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">USUARIO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        <td>'. $row["nombre"] .'</td>
                        <td>'. $row["nombreusuario"] .'</td>
                    </tr>
                    ';   
                }
                ?>
            </tbody>
        </table>
        <a href=""></a>
    </div>
</body>

</html>