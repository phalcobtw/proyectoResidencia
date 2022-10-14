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
                         <ul class="menu">
                            <li>Movimientos       
                                <ul class="dropdownmenu">
                                <li><a href="capturaContrarecibos.php" class="menulinks">Captura de ContraRecibos</a></li>
                                <li><a href="" class="menulinks">Pago de Facturas</a></li>
                               </ul>
                            </li>
                            <li>Traspaso       
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Verificar Informaci&oacute;n</a></li>
                                <li><a href="realizarTransacciones.php" class="menulinks">Realizar las Transacciones</a></li>
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

</body>
</html>