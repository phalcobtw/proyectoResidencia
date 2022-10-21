<?php
include "../bd_conn.php";
include "../validarSesion2.php";

if (isset($_POST['submit'])) {
    $foliorec = $_POST['folio'];
    $fecharec = $_POST['fecha'];
    $claveprovee = $_POST['cuenta'];
    $fuenteing = $_POST['fuenteing'];
    $estpoliza = $_POST['poliza'];

    $sqlins = "INSERT INTO `cheques`(`id`, `folio`, `fecha`, `claveproveedor`, `fuenteingresos`, `estadopoliza`) 
    VALUES ('[value-1]','$foliorec','$fecharec','$claveprovee','$fuenteing','$estpoliza')";
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
                        <td><a href=".php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
                        <td><a href=".php?id=' . $row["id"] . '" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>  
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
                        <input type="text" class="form-control" name="folio">
                    </div>
                    <div class="col-2 mt-2">
                        <label class="form-label">Fecha:</label>
                        <input type="text" class="form-control" name="fecha" value="<?php echo $fulldate; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mt-2">
                        <label class="form-label">Descripción:</label>
                        <select class="form-select" aria-label="Default select example" id="selector">
                            <option selected>Seleccione una opcion</option>
                            <!-- <option value="2102000000000">PROVEEDORES</option>
                            <option value="2102200000000">INGRESOS PROPIOS</option>
                            <option value="2102200216000">2016</option>
                            <option value="2102200217000">2017</option>
                            <option value="2102200218000">2018</option>
                            <option value="2102200218001">EQUIPOS NIETOS DE SINALOA, S.A</option>
                            <option value="2102200218002">PROVEEDORA EPSILON DEL NOROESTE</option>
                            <option value="2102200218003">OSCAR ENRIQUE PRECIADO MARES</option>
                            <option value="2102200218004">TELEFONOS DE MEXICO, S.A.B. DE C.V</option> -->
                            <?php
                            $sqlant = "SELECT * from `cuentacatalogo`";
                            $resultant = mysqli_query($conn, $sqlant);
                            while ($rowant = mysqli_fetch_array($resultant)) {
                                echo '
                                <option value="' . $rowant["cuenta"] . '">' . $rowant["descripcion"] . '</option>
                                ';
                            }

                            ?>
                        </select>
                    </div>
                    <div class="col-4 mt-2">
                        <label class="form-label">Clave del Proveedor:</label>
                        <input type="text" class="form-control" name="cuenta" id="txtCuenta" readonly>
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
                        <input type="text" name="importe" class="form-control">
                    </div>
                    <div class="col-4 mt-2">
                        <label for="" class="form-label">Vencimiento:</label>
                        <input type="text" class="form-control" name="vencimiento">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!-- TO DO: PREGUNTAR SI AGREGO TEXT FIELD INDICANDO CLAVE O NOMBRE DE LA ACTIVIDAD A LA DERECHA DE CADA SELECT LIST -->
                <!-- TO DO: LLENAR BASE DE DATOS DE CADA SELECT LIST DE ABAJO -->
                <div class="row text-center">
                    <div class="col mt-2">
                        <label for="" class="form-label label-txt">PROGRAMA:</label>
                        <div class="accordion" id="accordionExample">
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
                                    <td>' . $rowprog["programa"] . '</td>
                                    <td>' . $rowprog["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark">Agregar</button></td> 
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col mt-2">
                        <label for="" class="form-label label-txt">ACTIVIDAD:</label>
                        <div class="accordion" id="accordionExample">
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
                                    <td>' . $rowact["actividad"] . '</td>
                                    <td>' . $rowact["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark">Agregar</button></td> 
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col mt-2">
                        <label for="" class="form-label">PARTIDA:</label>
                        <div class="accordion" id="accordionExample">
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
                                    <td>' . $rowpar["partida"] . '</td>
                                    <td>' . $rowpar["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark">Agregar</button></td> 
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col mt-2">
                        <label for="" class="form-label">DEPARTAMENTO:</label>
                        <div class="accordion" id="accordionExample">
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
                                    <td>' . $rowdep["departamento"] . '</td>
                                    <td>' . $rowdep["descripcion"] . '</td>
                                    <td><button type="button" class="btn btn-outline-dark">Agregar</button></td> 
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TO DO: GASTO, IVA, ISR Y ACTIVO VA EN CUENTAS, METER TODO A UNA FUNCION PHP PARA IMPRIMIR SU SELECT LIST DESDE UN QUERY -->
                <div class="row">
                    <div class="col mt-2">
                        <label for="" class="form-label">Gasto:</label>
                        <select class="form-select" name="gastoselect" id="gastoselect">
                            <option selected>Seleccione una opcion:</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="" class="form-label">IVA:</label>
                        <select class="form-select" name="ivaselect" id="ivaselect">
                            <option selected>Seleccione una opcion:</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="" class="form-label">ISR:</label>
                        <select class="form-select" name="isrselect" id="isrselect">
                            <option selected>Seleccione una opcion:</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="" class="form-label">Activo:</label>
                        <select class="form-select" name="activoselect" id="activoselect">
                            <option selected>Seleccione una opcion:</option>
                        </select>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
            </form>
        </div>
    </div>

</body>
<script src="../js/capContrarecibos.js"></script>
<script src="../js/collapse.js"></script>

</html>