<?php
include "../bd_conn.php";
include "../validarSesion2.php";
$cuenta = $_GET['cuenta'];
if (isset($_POST['submit'])) {
    $tipocuenta = $_POST['tipocuenta'];
    $descripcion = $_POST['descripcion'];
    $naturalezasaldo = $_POST['naturalezasaldo'];
    $fecha = $_POST['fecha'];
    $tipoad = $_POST['tipoad'];
    $tiporet = $_POST['tiporet'];

    $sqlins = "UPDATE `cuentacatalogo` 
    SET `tipocuenta`='$tipocuenta',`descripcion`='$descripcion',`naturalezasaldo`='$naturalezasaldo',`fecha`='$fecha' , `tipoad`='$tipoad', `tiporet`='$tiporet' WHERE cuenta='$cuenta'";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: cuentaCatalogos.php?msg=Cuenta actualizado con éxito.");
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
                                <li><a href="" class="menulinks">Programas</a></li>
                                <li><a href="" class="menulinks">Actividades</a></li>
                                <li><a href="" class="menulinks">Partidas</a></li>
                                <li><a href="" class="menulinks">Departamentos</a></li>
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
                            <li><a href="../seleccionModulos.html" class="menulinks">Salir</a></li>
                        </ul>
    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Editar Cuenta</div>
        <?php
        $cuenta = $_GET['cuenta'];
        $sql = "SELECT * FROM `cuentacatalogo` WHERE cuenta = '$cuenta' LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="col">
                    <label class="form-label">Tipo de Cuenta:</label>
                    <input type="text" class="form-control" name="tipocuenta" value="<?php echo $row['tipocuenta'];?>">
                </div>    
            <div class="col">
                    <label class="form-label">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'];?>">
                </div>
                <div class="row">
            <div class="col">
                    <label class="form-label">Naturaleza del Saldo:</label>
                    <input type="text" class="form-control" name="naturalezasaldo" value="<?php echo $row['naturalezasaldo'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Fecha de Alta:</label>
                    <input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha'];?>">
                </div>
                </div>
                <div class="row">
            <div class="col">
                    <label class="form-label">Tipo (A)cumulativa (D)etalle:</label>
                    <input type="text" class="form-control" name="tipoad" value="<?php echo $row['tipoad'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Tipo Retenci&oacute;n:</label>
                    <input type="text" class="form-control" name="tiporet" value="<?php echo $row['tiporet'];?>">
                </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
                <a href="cuentaCatalogos.php" class="btn btn-danger" style="margin-bottom: 30px;">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>