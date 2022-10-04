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
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="col">
                    <label class="form-label">Folio:</label>
                    <input type="text" class="form-control" name="folio">
                </div>
                <div class="col">
                    <label class="form-label">Fecha:</label>
                    <input type="text" class="form-control" name="fecha" readonly value="<?php echo $fulldate; ?>">
                </div>
                <div class="col">
                    <label class="form-label">Descripción:</label>
                    <select class="form-select" aria-label="Default select example" id="selector" >
                        <option selected >Seleccione una opcion</option>
                        <option value="2102-000-000-000">PROVEEDORES</option>
                        <option value="2102-200-000-000">INGRESOS PROPIOS</option>
                        <option value="2102-200-216-000">2016</option>
                        <option value="2102-200-217-000">2017</option>
                        <option value="2102-200-218-000">2018</option>
                        <option value="2102-200-218-001">EQUIPOS NIETOS DE SINALOA, S.A</option>
                        <option value="2102-200-218-002">PROVEEDORA EPSILON DEL NOROESTE</option>
                        <option value="2102-200-218-003">OSCAR ENRIQUE PRECIADO MARES</option>
                        <option value="2102-200-218-004">TELEFONOS DE MEXICO, S.A.B. DE C.V</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Clave del Proveedor:</label>
                    <input type="text" class="form-control" name="cuenta" id="txtCuenta" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Fuente de Ingresos:</label>
                    <input type="text" class="form-control" name="fuenteing">
                </div>
                <div class="col">
                    <label class="form-label">Poliza:</label>
                    <input type="text" class="form-control" name="poliza" value="Pendiente" readonly>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
            </form>
        </div>
    </div>
</body>
<script src="../js/capContrarecibos.js"></script>

</html>