<?php
include "../bd_conn.php";
include "../validarSesion2.php";
if (isset($_POST['submit'])) {
    $fecha = $_POST['fecha'];
    $clave = $_POST['clave'];
    $cuenta = $_POST['cuenta'];
    $importe = $_POST['importe'];
    $nocheque = $_POST['nocheque'];
    $concepto = $_POST['concepto'];
    $expedido = $_POST['expedido'];


    $sqlins = "INSERT INTO `chequesespec`
    (`fecha`, `clave`, `cuenta`, `importe`, `nocheque`, `concepto`, `expedido`) 
    VALUES ('$fecha','$clave','$cuenta','$importe','$nocheque','$concepto','$expedido')";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: emisionChequesEspecial.php?msg=Registrado con éxito.");
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
                                <li><a href="emisionChequesEspecial.php"class="menulinks"> Emisi&oacute;n de Cheques Especiales</a></li>
                                <li><a href="" class="menulinks"> Cancelaciones </a>
                                <ul class="dropdownmenu">                                
                                <li><a href="cancelacionDeCheques.php" class="menulinks"> Cancelacion de Cheques</a></li>
                               <li><a href="cancelacionChequesMeses.php" class="menulinks"> Cancelacion de Cheques de Meses Anteriores </a></li>
                           </ul>
                            </li>
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
                            <li><a href="catalogobanks.php" class="menulinks">Bancos</a></li>      
                                <li><a href="catalogoCuentas.php" class="menulinks">Cuentas</a></li>
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
                                <li><a href="configITLM.php" class="menulinks">Configurar</a></li>
                               </ul>
                            </li>
                            <li><a href="../seleccionModulos.php" class="menulinks">Salir</a></li>
                        </ul>
                        <!-- aqui termina -->
                        <div class="container">
                            <div class="text-center mb-4">
                                <h3>Emisi&oacute;n de Cheques Especiales</h3>
                            </div>
                            <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
                            <div class="container d-flex justify-content-center">
                                <form action="" method="post" style="width: 50vw; min-width: 300px;">
                                <div class="row">    
                                <div class="col">
                                        <label class="form-label">Fecha:</label>
                                    <input type="text" class="form-control" name="fecha">
                                </div>
                                <div class="col">
                                    <label class="form-label">Clave:</label>
                                <input type="text" class="form-control" name="clave">
                            </div>
                            </div>
                            <div class="row ">
                                <div class="col">
                                    <label class="form-label">Cuenta:</label>
                                <input type="text" class="form-control" name="cuenta">
                            </div>
                            <div class="col">
                                <label class="form-label">Importe:</label>
                            <input type="text" class="form-control" name="importe">
                            </div>
                            </div>
                            <div class="col">
                                <label class="form-label">No. Cheque:</label>
                            <input type="text" class="form-control" name="nocheque">
                            <div class="col">
                                <label class="form-label">Concepto:</label>
                            <input type="text" class="form-control" name="concepto">
                        </div>
                        <div class="col">
                                <label class="form-label">Expedido a:</label>
                            <input type="text" class="form-control" name="expedido">
                        </div> <br>
                        <div class="mb-3">
                                <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                            </div>
                        </form>
                        </div>
</body>
</html>