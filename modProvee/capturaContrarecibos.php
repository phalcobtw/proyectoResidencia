<?php
include "../bd_conn.php";
include "../validarSesion2.php";

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




    $sqlins = "INSERT INTO `cheques`(`id`, `folio`, `fecha`, `claveproveedor`, `descprovee`, `fuenteingresos`, `estadopoliza`, `factura`, `importe`, `vencimiento`, 
    `descripcioncheque`, `cuentacargo`, `cuentaabono`, `claveprog`, `descprog`, `claveact`, `descact`, `clavepart`, `descpart`, `clavedep`, `descdep`, 
    `clavegasto`, `descgasto`, `claveiva`, `desciva`, `claveisr`, `descisr`, `claveactivo`, `descactivo`) VALUES ('[value-1]',
    '$foliorec','$fecharec','$claveprovee','$descprovee','$fuenteing','$estpoliza','$factura','$importe','$vencimiento','$descripcioncheque','$cuentacargo','$cuentaabono','$claveprog','$descprog',
    '$claveact','$descact','$clavepart','$descpart','$clavedep','$descdep','$clavegasto','$descgasto','$claveiva','$desciva','$claveisr','$descisr','$claveactivo','$descactivo')";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: capturaContrarecibos.php?msg=Registro con exito.");
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
                    <th scope="col">CLAVE PROVEEDOR</th>
                    <th scope="col">FUENTE DE INGRESOS</th>
                    <th scope="col">ESTADO DE POLIZA</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM cheques";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                        <td>' . $row["folio"] . '</td>
                        <td>' . $row["fecha"] . '</td>  
                        <td>' . $row["claveproveedor"] . '</td>
                        <td>' . $row["fuenteingresos"] . '</td>
                        <td>' . $row["estadopoliza"] . '</td>
                        <td><a href="editarContrarecibos.php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
                        <td><a href="eliminarContarecibos.php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>  
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Captura de Contra-Recibos</div>
        <div class="container d-flex justify-content-center fw-bold">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col-10 mt-2">
                        <label class="form-label">Folio:</label>
                        <input type="text" class="form-control" name="folio" id="foliotxt">
                    </div>
                    <div class="col-2 mt-2">
                        <label class="form-label">Fecha:</label>
                        <input type="text" class="form-control" name="fecha" value="<?php echo $fulldate; ?>">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col mt-2">
                        <div class="row text-center">
                            <div class="col-4 mt-2">
                                <label for="" class="form-label label-txt">DESCRIPCION Y CLAVE DE PROVEEDOR: </label>
                            </div>
                            <div class="col-2 mt-2">
                                <input type="text" class="form-control" id="clavecuenta" name="clavecuentan" style="color:red;" readonly>
                            </div>
                            <div class="col-4 mt-2">
                                <input type="text" class="form-control" id="descrcuenta" name="descrcuentan" style="color:red;" readonly>
                            </div>
                            <div class="col-2 mt-2">
                                <input type="text" class="form-control" id="tiporetcuenta" name="tiporetcuentan" style="color:black; font-weight:bold;" readonly>
                            </div>
                        </div>
                        <div class="accordion mt-4" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        <strong>Mostrar/Ocultar Tabla:</strong>
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="table-wrapper">
                                            <table class="table table-sm table-hover table-striped palco-table">

                                                <thead class="table-dark">
                                                    <th>
                                                        Clave
                                                    </th>
                                                    <th>
                                                        Descripcion
                                                    </th>
                                                    <th>
                                                        Tipo Ret.
                                                    </th>
                                                    <th>
                                                        Seleccionar
                                                    </th>
                                                </thead>
                                                <tbody class="palco-tbody">
                                                    <?php
                                                    $sqlcuentas = "SELECT * from `cuentacatalogo`";
                                                    $resultcuentas = mysqli_query($conn, $sqlcuentas);
                                                    while ($rowcuentas = mysqli_fetch_array($resultcuentas)) {
                                                        echo '
                                <tr>
                                    <td class="cuentatd">' . $rowcuentas["cuenta"] . '</td>
                                    <td class="descrcuentatd">' . $rowcuentas["descripcion"] . '</td>
                                    <td class="tiporetcuentatd">' . $rowcuentas["tiporet"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark cuentasbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                    }
                                                    echo '
                            
                            '
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="button" class="btn btn-danger limpiarCuentas">Limpiar Seleccionado</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mt-2">
                        <label class="form-label">Fuente de Ingresos:</label>
                        <input type="text" class="form-control" name="fuenteing">
                    </div>
                    <div class="col-6 mt-2">
                        <label class="form-label">Poliza:</label>
                        <input type="text" class="form-control" name="poliza" value="Pendiente" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mt-2">
                        <label class="form-label">Factura:</label>
                        <input type="text" class="form-control" name="factura">
                    </div>
                    <div class="col-4 mt-2">
                        <label class="form-label">Importe:</label>
                        <input type="text" name="importe" class="form-control" id="importeTxt">
                    </div>
                    <div class="col-4 mt-2">
                        <label for="" class="form-label">Vencimiento: <span class="text-muted fw-light">YYYY/MM/DD</span></label>
                        <input type="text" class="form-control" name="vencimiento">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcionchequeN">
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary" id="hidebutton" data-bs-toggle="modal" data-bs-target="#exampleModal">Siguiente</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cuentas de Orden</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="table-wrapper">
                                        <table class="table table-sm table-hover table-striped palco-table">
                                            <thead class="table-dark">
                                                <th>
                                                    Cuenta de Cargo
                                                </th>
                                                <th>
                                                    Descripcion
                                                </th>
                                                <th>
                                                    Seleccionar
                                                </th>
                                            </thead>
                                            <tbody class="palco-tbody">
                                                <?php
                                                $sqlcar = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) BETWEEN 6100 AND 6900";
                                                $resultcar = mysqli_query($conn, $sqlcar);
                                                while ($rowcargo = mysqli_fetch_array($resultcar)) {
                                                    echo '
                                <tr>
                                    <td class="cuencartd">' . $rowcargo["cuenta"] . '</td>
                                    <td class="cuencardesctd">' . $rowcargo["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark cuencarbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                }
                                                echo '
                            
                            '
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-wrapper">
                                        <table class="table table-sm table-hover table-striped palco-table">
                                            <thead class="table-dark">
                                                <th>
                                                    Cuenta de Abono
                                                </th>
                                                <th>
                                                    Descripcion
                                                </th>
                                                <th>
                                                    Seleccionar
                                                </th>
                                            </thead>
                                            <tbody class="palco-tbody">
                                                <?php
                                                $sqlabo = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) BETWEEN 6100 AND 6900";
                                                $resultabo = mysqli_query($conn, $sqlabo);
                                                while ($rowabo = mysqli_fetch_array($resultabo)) {
                                                    echo '
                                                    <tr>
                                                        <td class="cuenabotd">' . $rowabo["cuenta"] . '</td>
                                                        <td class="cuenabodesctd">' . $rowabo["descripcion"] . '</td>
                                                        <td><button type="button" class="btn btn-outline-dark cuenabobutton">Agregar</button></td> 
                                                    </tr>
                                ';
                                                }
                                                echo '
                            
                            '
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary save savebutton" data-bs-dismiss="modal">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="next">
                    <!-- <div class="row text-center"> -->
                        <div class="col mt-2">
                            <div class="row text-center">
                                <div class="col-4 mt-2">
                                    <label for="" class="form-label label-txt">CUENTA DE CARGO: </label>
                                </div>
                                <div class="col-4 mt-2">
                                    <input type="text" class="form-control" id="cuencar" name="cuencarn" style="color:red;" readonly>
                                </div>
                                <div class="col-4 mt-2">
                                    <input type="text" class="form-control" id="cuencardesc" name="cuencardescn" style="color:red;" readonly>
                                </div>
                                <div class="col-4 mt-2">
                                    <label for="" class="form-label label-txt">CUENTA DE ABONO: </label>
                                </div>
                                <div class="col-4 mt-2">
                                    <input type="text" class="form-control" id="cuenabo" name="cuenabon" style="color:red;" readonly>
                                </div>
                                <div class="col-4 mt-2">
                                    <input type="text" class="form-control" id="cuenabodesc" name="cuenabodescn" style="color:red;" readonly>
                                </div>

                                <div class="row text-center">
                                    <div class="col mt-4">
                                        <label for="" class="form-label label-txt mt-2">PROGRAMA:</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="claveprog" name="claveprogn" style="color:red;" readonly>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="descprog" name="descprogn" style="color:red;" readonly>
                                </div>
                                <br>
                                <div class="accordion mt-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <strong>Mostrar/Ocultar Tabla:</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrapper">
                                                    <table class="table table-sm table-hover table-striped palco-table">
                                                        <thead class="table-dark">
                                                            <th>
                                                                Clave
                                                            </th>
                                                            <th>
                                                                Descripcion
                                                            </th>
                                                            <th>
                                                                Seleccionar
                                                            </th>
                                                        </thead>
                                                        <tbody class="palco-tbody">
                                                            <?php
                                                            $sqlprog = "SELECT * from `programacatalogo`";
                                                            $resultprog = mysqli_query($conn, $sqlprog);
                                                            while ($rowprog = mysqli_fetch_array($resultprog)) {
                                                                echo '
                                <tr>
                                    <td class="progtd">' . $rowprog["programa"] . '</td>
                                    <td class="progdesctd">' . $rowprog["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark progbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                            }
                                                            echo '
                            
                            '
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-danger limpiarPrograma">Limpiar Seleccionado</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2">
                                <label for="" class="form-label label-txt">ACTIVIDAD:</label>
                                <div class="row text-center">
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="claveact" name="claveactn" style="color:red;" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="descact" name="descactn" style="color:red;" readonly>
                                    </div>
                                </div>
                                <div class="accordion mt-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>Mostrar/Ocultar Tabla:</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrapper">
                                                    <table class="table table-sm table-hover table-striped palco-table">
                                                        <thead class="table-dark">
                                                            <th>
                                                                Clave
                                                            </th>
                                                            <th>
                                                                Descripcion
                                                            </th>
                                                            <th>
                                                                Seleccionar
                                                            </th>
                                                        </thead>
                                                        <tbody class="palco-tbody">
                                                            <?php
                                                            $sqlact = "SELECT * from `actividadcatalogo`";
                                                            $resultact = mysqli_query($conn, $sqlact);
                                                            while ($rowact = mysqli_fetch_array($resultact)) {
                                                                echo '
                                <tr>
                                    <td class="acttd">' . $rowact["actividad"] . '</td>
                                    <td class="descacttd">' . $rowact["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark actbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                            }
                                                            echo '
                            
                            '
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-danger limpiarActividad">Limpiar Seleccionado</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2">
                                <label for="" class="form-label">PARTIDA:</label>
                                <div class="row text-center">
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="clavepart" name="clavepartn" style="color:red;" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="descpart" name="descpartn" style="color:red;" readonly>
                                    </div>
                                </div>
                                <div class="accordion mt-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>Mostrar/Ocultar Tabla:</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrapper">
                                                    <table class="table table-sm table-hover table-striped palco-table">
                                                        <thead class="table-dark">
                                                            <th>
                                                                Clave
                                                            </th>
                                                            <th>
                                                                Descripcion
                                                            </th>
                                                            <th>
                                                                Seleccionar
                                                            </th>
                                                        </thead>
                                                        <tbody class="palco-tbody">
                                                            <?php
                                                            $sqlpar = "SELECT * from `partidacatalogo`";
                                                            $resultpar = mysqli_query($conn, $sqlpar);
                                                            while ($rowpar = mysqli_fetch_array($resultpar)) {
                                                                echo '
                                <tr>
                                    <td class="parttd">' . $rowpar["partida"] . '</td>
                                    <td class="descparttd">' . $rowpar["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark partbutton">Agregar</button></td> 
                                </tr>
                                ';
                                                            }
                                                            echo '
                            
                            '
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-danger limpiarPartida">Limpiar Seleccionado</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col mt-2">
                                <label for="" class="form-label">DEPARTAMENTO:</label>
                                <div class="row text-center">
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="clavedep" name="clavedepn" style="color:red;" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <input type="text" class="form-control" id="descdep" name="descdepn" style="color:red;" readonly>
                                    </div>
                                </div>
                                <div class="accordion mt-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <strong>Mostrar/Ocultar Tabla:</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrapper">
                                                    <table class="table table-sm table-hover table-striped palco-table">
                                                        <thead class="table-dark">
                                                            <th>
                                                                Clave
                                                            </th>
                                                            <th>
                                                                Descripcion
                                                            </th>
                                                            <th>
                                                                Seleccionar
                                                            </th>
                                                        </thead>
                                                        <tbody class="palco-tbody">
                                                            <?php
                                                            $sqldep = "SELECT * from `departamentocatalogo`";
                                                            $resultdep = mysqli_query($conn, $sqldep);
                                                            while ($rowdep = mysqli_fetch_array($resultdep)) {
                                                                echo '
                                    <tr>
                                        <td class="deptd">' . $rowdep["departamento"] . '</td>
                                        <td class="descdeptd">' . $rowdep["descripcion"] . '</td>
                                        <td><button type="button" class="btn btn-outline-dark depbutton">Agregar</button></td> 
                                    </tr>
                                    ';
                                                            }
                                                            echo '
                                
                                '
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-danger limpiarDepartamento">Limpiar Seleccionado</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                    <div class="row text-center">
                        <div class="col mt-2">
                            <label for="" class="form-label label-txt">GASTO:</label>
                            <div class="row text-center">
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="clavegasto" name="clavegastoN" style="color:red;" readonly>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="descgasto" name="descgastoN" style="color:red;" readonly>
                                </div>
                            </div>
                            <div class="accordion mt-2" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <strong>Mostrar/Ocultar Tabla:</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-wrapper">
                                                <table class="table table-sm table-hover table-striped palco-table">
                                                    <thead class="table-dark">
                                                        <th>
                                                            Clave
                                                        </th>
                                                        <th>
                                                            Descripcion
                                                        </th>
                                                        <th>
                                                            Seleccionar
                                                        </th>
                                                    </thead>
                                                    <tbody class="palco-tbody">
                                                        <?php
                                                        $sqlgasto = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) >= 4100";
                                                        $resultgasto = mysqli_query($conn, $sqlgasto);
                                                        while ($rowgasto = mysqli_fetch_array($resultgasto)) {
                                                            echo '
                                <tr>
                                    <td class="gastotd">' . $rowgasto["cuenta"] . '</td>
                                    <td class="descgastotd">' . $rowgasto["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark gastoButton">Agregar</button></td> 
                                </tr>
                                ';
                                                        }
                                                        echo '
                            
                            '
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button type="button" class="btn btn-danger limpiarGasto">Limpiar Seleccionado</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-2">
                            <label for="" class="form-label label-txt">IVA:</label>
                            <div class="row text-center">
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="claveiva" name="claveivaN" style="color:red;" readonly>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="desciva" name="descivaN" style="color:red;" readonly>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 mt-2">

                                </div>
                                <div class="col-4 mt-2">
                                    <label for="" class="form-label">CANTIDAD A RESTAR:</label>
                                    <input type="text" class="form-control" id="ivaResta" style="color: red;">
                                </div>
                                <div class="col-4 mt-2">
                                    
                                </div>
                            </div>
                            <div class="accordion mt-2" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <strong>Mostrar/Ocultar Tabla:</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-wrapper">
                                                <table id="tableIVA" class="table table-sm table-hover table-striped palco-table">
                                                    <thead class="table-dark">
                                                        <th>
                                                            Clave
                                                        </th>
                                                        <th>
                                                            Descripcion
                                                        </th>
                                                        <th>
                                                            Tipo Ret.
                                                        </th>
                                                        <th>
                                                            Seleccionar
                                                        </th>
                                                    </thead>
                                                    <tbody class="palco-tbody">
                                                        <?php
                                                        $sqliva = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) = 2101";
                                                        $resultiva = mysqli_query($conn, $sqliva);
                                                        while ($rowiva = mysqli_fetch_array($resultiva)) {
                                                            echo '
                                <tr>
                                    <td class="ivatd">' . $rowiva["cuenta"] . '</td>
                                    <td class="descivatd">' . $rowiva["descripcion"] . '</td>
                                    <td class="tiporettd">' . $rowiva["tiporet"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark ivaButton">Agregar</button></td> 
                                </tr>
                                ';
                                                        }
                                                        echo '
                            
                            '
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <span class="text-muted fw-light">Clickea el boton para restaurar valores</span><br>
                                            <button type="button" class="btn btn-danger limpiarIva">Limpiar Seleccionado</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-2">
                            <label for="" class="form-label label-txt">ISR:</label>
                            <div class="row text-center">
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="claveisr" name="claveisrN" style="color:red;" readonly>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="descisr" name="descisrN" style="color:red;" readonly>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 mt-2">

                                </div>
                                <div class="col-4 mt-2">
                                    <label for="" class="form-label">CANTIDAD A RESTAR:</label>
                                    <input type="text" class="form-control" id="isrResta" style="color: red;">
                                </div>
                                <div class="col-4 mt-2">
                                    
                                </div>
                            </div>
                            <div class="accordion mt-2" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <strong>Mostrar/Ocultar Tabla:</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-wrapper">
                                                <table id="tableISR" class="table table-sm table-hover table-striped palco-table">
                                                    <thead class="table-dark">
                                                        <th>
                                                            Clave
                                                        </th>
                                                        <th>
                                                            Descripcion
                                                        </th>
                                                        <th>
                                                            Tipo Ret.
                                                        </th>
                                                        <th>
                                                            Seleccionar
                                                        </th>
                                                    </thead>
                                                    <tbody class="palco-tbody">
                                                        <?php
                                                        $sqlisr = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) = 2101";
                                                        $resultisr = mysqli_query($conn, $sqlisr);
                                                        while ($rowisr = mysqli_fetch_array($resultisr)) {
                                                            echo '
                                <tr>
                                    <td class="isrtd">' . $rowisr["cuenta"] . '</td>
                                    <td class="descisrtd">' . $rowisr["descripcion"] . '</td>
                                    <td class="tiporettd">' . $rowisr["tiporet"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark isrButton">Agregar</button></td> 
                                </tr>
                                ';
                                                        }
                                                        echo '
                            
                            '
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <span class="text-muted fw-light">Clickea el boton para restaurar valores</span><br>
                                            <button type="button" class="btn btn-danger limpiarIsr">Limpiar Seleccionado</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col mt-2">
                            <label for="" class="form-label label-txt">ACTIVO:</label>
                            <div class="row text-center">
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="claveactivo" name="claveactivoN" style="color:red;" readonly>
                                </div>
                                <div class="col-6 mt-2">
                                    <input type="text" class="form-control" id="descactivo" name="descactivoN" style="color:red;" readonly>
                                </div>
                            </div>
                            <div class="accordion mt-2" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <strong>Mostrar/Ocultar Tabla:</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-wrapper">
                                                <table id="tableACTIVO" class="table table-sm table-hover table-striped palco-table">
                                                    <thead class="table-dark">
                                                        <th>
                                                            Clave
                                                        </th>
                                                        <th>
                                                            Descripcion
                                                        </th>
                                                        <th>
                                                            Seleccionar
                                                        </th>
                                                    </thead>
                                                    <tbody class="palco-tbody">
                                                        <?php
                                                        $sqlactivo = "SELECT * from `cuentacatalogo` WHERE LEFT(cuenta,4) BETWEEN 1201 AND 1210";
                                                        $resultactivo = mysqli_query($conn, $sqlactivo);
                                                        while ($rowactivo = mysqli_fetch_array($resultactivo)) {
                                                            echo '
                                <tr>
                                    <td class="activotd">' . $rowactivo["cuenta"] . '</td>
                                    <td class="descactivotd">' . $rowactivo["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark activoButton">Agregar</button></td> 
                                </tr>
                                ';
                                                        }
                                                        echo '
                            
                            '
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button type="button" class="btn btn-danger limpiarActivo">Limpiar Seleccionado</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <div class="label-form">
                                Importe:
                            </div>
                            <input type="text" class="form-control" id="importeFinal" name="importeFinalN">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="../js/capContrarecibos.js"></script>
<!-- <script src="../js/collapse.js"></script> -->
<script src="../js/navbar.js"></script>

</html>