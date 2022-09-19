<?php
include "../bd_conn.php";
include "../validarSesion2.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                         <ul class="menu">
                            <li>Cheques        
                                <ul class="dropdownmenu">
                                <li><a href="" class="menulinks">Emisi&oacute;n de Cheques en Espera</a></li>
                                <li><a href=""class="menulinks"> Emisi&oacute;n de Cheques Especiales</a></li>
                                <li><a href="" class="menulinks"> Cancelaciones </a></li>
                               </ul>
                            </li>
                            <li>Depositos        
                                <ul class="dropdownmenu">
                                <li><a href="depositos.php" class="menulinks">Dep&oacute;sitos Bancarios </a></li>
                               </ul>
                            </li>
                            <li>Traspasos        
                                <ul class="dropdownmenu">
                                <li><a href="traspasos.php" class="menulinks">Traspasos entre Cuentas</a></li>
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
                                <li><a href="configITLM.html" class="menulinks">Configurar</a></li>
                               </ul>
                            </li>
                            <li><a href="../seleccionModulos.html" class="menulinks">Salir</a></li>
                        </ul>
                        <!-- aqui termina -->
                        <div class="container">
                            <div class="text-center mb-4">
                                <h3>Datos de la Instituci&oacute;n Tecnol&oacute;gica</h3>
                            </div>
                            <div class="container d-flex justify-content-center">
                                <form style="width: 50vw; min-width: 300px;">
                                    <div class="col">
                                        <label class="form-label">Dependencia:</label>
                                    <input type="text" class="form-control" name="dependencia" value="INSTITUTO TECNOLOGICO DE LOS MOCHIS">
                                </div>
                                <div class="col">
                                    <label class="form-label">Domicilio:</label>
                                <input type="text" class="form-control" name="domicilio" value="BLVD. JUAN DE DIOS BATIZ Y 20 NOV.">
                            </div>
                            <div class="row ">
                                <div class="col">
                                    <label class="form-label">Clave:</label>
                                <input type="text" class="form-control" name="clave" value="30">
                            </div>
                            <div class="col">
                                <label class="form-label">Ciudad:</label>
                            <input type="text" class="form-control" name="clave" value="LOS MOCHIS, SIN..">
                            </div>
                            </div>
                            <div class="col">
                                <label class="form-label">Director RFC:</label>
                            <input type="text" class="form-control" name="clave" value="ING. LUIS EDUARDO RUELAS GARCIA RUGL-690422334">
                            </div>
                            <div class="col">
                                <label class="form-label">Contralador RFC:</label>
                            <input type="text" class="form-control" name="clave" value="LIC. ERIKA OJEDA TORRES OETE-781024S1">  
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                        </div>
                        </form>
                        </div>
</body>
</html>