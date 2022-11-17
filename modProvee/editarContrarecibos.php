<?php
include "../bd_conn.php";
include "../validarSesion2.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $foliorec = $_POST['folio'];
    $fecharec = $_POST['fecha'];
    $claveprovee = $_POST['clavecuentan'];
    $descprovee = $_POST['descrcuentan'];
    $fuenteing = $_POST['fuenteing'];
    $estpoliza = $_POST['poliza'];
    $factura = $_POST['factura'];
    $importe = $_POST['importeFinalN'];
    $vencimiento = $_POST['vencimiento'];
    $descripcioncheque = $_POST['descripcionchequeN'];
    $cuentacargo = $_POST['cuencarn'];
    $cuentaabono = $_POST['cuenabon'];
    $claveprog = $_POST['claveprogn'];
    $descprog = $_POST['descprogn'];
    $claveact = $_POST['claveactn'];
    $descact = $_POST['descactn'];
    $clavepart = $_POST['clavepartn'];
    $descpart = $_POST['descpartn'];
    $clavedep = $_POST['clavedepn'];
    $descdep = $_POST['descdepn'];
    $clavegasto = $_POST['clavegastoN'];
    $descgasto = $_POST['descgastoN'];
    $claveiva = $_POST['claveivaN'];
    $desciva = $_POST['descivaN'];
    $claveisr = $_POST['claveisrN'];
    $descisr = $_POST['descisrN'];
    $claveactivo = $_POST['claveactivoN'];
    $descactivo = $_POST['descactivoN'];




    $sqlins = "UPDATE `cheques`
    SET `id` = '$id', `folio`='$foliorec', `fecha`='$fecharec', `claveproveedor`='$claveprovee', `descprovee`='$descprovee', `fuenteingresos`='$fuenteing', `estadopoliza`='$estpoliza', 
    `factura`= '$factura', `importe`='$importe', `vencimiento`= '$vencimiento', `descripcioncheque`='$descripcioncheque', `cuentacargo`='$cuentacargo', `cuentaabono`='$cuentaabono', 
    `claveprog`='$claveprog', `descprog`='$descprog', `claveact`='$claveact', `descact`='$descact', `clavepart`='$clavepart', `descpart`='$descpart', `clavedep`='$clavedep', `descdep`='$descdep', 
    `clavegasto`='$clavegasto', `descgasto`='$descgasto', `claveiva`='$claveiva', `desciva`='$desciva', `claveisr`='$claveisr', `descisr`='$descisr', `claveactivo`='$claveactivo', `descactivo`='$descactivo'
    WHERE id = $id";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: capturaContrarecibos.php?msg=Captura actualizada con exito.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTRED - SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<header class="p-3 bg-primary text-white">
        <div class="divheader">
            <div class="divlogo">
                <img src="../img/logosep.png" alt="logosep" class="logosep">
                <b class="titulo">SISPRO</b>
            </div>
        </div>
    </header>
    <body>
    <!-- todo el menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown" id="dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Movimientos</a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="capturaContrarecibos.php">Captura de ContraRecibos</a></li>
                            <li> <a class="dropdown-item" href="#">Pago de Facturas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Traspaso</a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="">Verificar Informaci&oacute;n</a></li>
                            <li> <a class="dropdown-item" href="realizarTransacciones.php">Realizar las Transacciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="myDropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Reportes</a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="">Facturas Pendientes</a></li>
                            <li> <a class="dropdown-item" href="">Facturas Pagadas</a></li>
                            <li> <a class="dropdown-item" href="">Facturas por Depto.</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" id="mr-1">Utilerias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
                            <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
                            <li><a class="dropdown-item" href="#">Control de Usuarios</a></li>
                            <li><a class="dropdown-item" href="#">Configurar Impresora</a></li>
                            <li><a class="dropdown-item" href="">Par&aacute;metros de Conexi&oacute;n CONTRED</a></li>
                            <li><a class="dropdown-item" href="#">Par&aacute;metros Retenci&oacute;n a Prov.</a></li>
                            <li><a class="dropdown-item" href="#">Cierrre de Ejercicio</a></li>
                            <li><a class="dropdown-item" href="#">Configurar Datos Generales</a></li>

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
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        Editar Contra-recibos
    </nav>
    <div class="container" style="margin-bottom: 35px;">
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM `cheques` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Folio:</label>
                    <input type="text" class="form-control" name="folio" value="<?php echo $row['folio'];?>">
                </div>
            <div class="col">
                    <label class="form-label">Fecha:</label>
                    <input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Clave Proveedor:</label>
                    <input type="text" class="form-control" name="clavecuentan" value="<?php echo $row['claveproveedor'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. Proveedor:</label>
                    <input type="text" class="form-control" name="descrcuentan" value="<?php echo $row['descprovee'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Fuente de Ingresos:</label>
                    <input type="text" class="form-control" name="fuenteing" value="<?php echo $row['fuenteingresos'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Poliza:</label>
                    <input type="text" class="form-control" name="poliza" value="<?php echo $row['estadopoliza'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Factura:</label>
                    <input type="text" class="form-control" name="factura" value="<?php echo $row['factura'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Importe:</label>
                    <input type="text" class="form-control" name="importeFinalN" value="<?php echo $row['importe'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Vencimiento:</label>
                    <input type="text" class="form-control" name="vencimiento" value="<?php echo $row['vencimiento'];?>">
                </div>
                </div>
                <div class="col">
                    <label class="form-label">Descripción:</label>
                    <input type="text" class="form-control" name="descripcionchequeN" value="<?php echo $row['descripcioncheque'];?>">
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Cuenta de Cargo:</label>
                    <input type="text" class="form-control" name="cuencarn" value="<?php echo $row['cuentacargo'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Cuenta de Abono:</label>
                    <input type="text" class="form-control" name="cuenabon" value="<?php echo $row['cuentaabono'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Programa:</label>
                    <input type="text" class="form-control" name="claveprogn" value="<?php echo $row['claveprog'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Programa:</label>
                    <input type="text" class="form-control" name="descprogn" value="<?php echo $row['descprog'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Actividad:</label>
                    <input type="text" class="form-control" name="claveactn" value="<?php echo $row['claveact'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Actividad:</label>
                    <input type="text" class="form-control" name="descactn" value="<?php echo $row['descact'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Partida:</label>
                    <input type="text" class="form-control" name="clavepartn" value="<?php echo $row['clavepart'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Partida:</label>
                    <input type="text" class="form-control" name="descpartn" value="<?php echo $row['descpart'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Departamento:</label>
                    <input type="text" class="form-control" name="clavedepn" value="<?php echo $row['clavedep'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Departamento:</label>
                    <input type="text" class="form-control" name="descdepn" value="<?php echo $row['descdep'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Gasto:</label>
                    <input type="text" class="form-control" name="clavegastoN" value="<?php echo $row['clavegasto'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Gasto:</label>
                    <input type="text" class="form-control" name="descgastoN" value="<?php echo $row['descgasto'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de IVA:</label>
                    <input type="text" class="form-control" name="claveivaN" value="<?php echo $row['claveiva'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de IVA:</label>
                    <input type="text" class="form-control" name="descivaN" value="<?php echo $row['desciva'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de ISR:</label>
                    <input type="text" class="form-control" name="claveisrN" value="<?php echo $row['claveisr'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de ISR:</label>
                    <input type="text" class="form-control" name="descisrN" value="<?php echo $row['descisr'];?>">
                </div>
                </div>
                <div class="row">
                <div class="col">
                    <label class="form-label">Clave de Activo:</label>
                    <input type="text" class="form-control" name="claveactivoN" value="<?php echo $row['claveactivo'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Desc. de Activo:</label>
                    <input type="text" class="form-control" name="descactivoN" value="<?php echo $row['descactivo'];?>">
                </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
                <a href="capturaContrarecibos.php" class="btn btn-danger" style="margin-bottom: 30px;">Cancelar</a>
            </form>
        </div>
    </div>
</body>