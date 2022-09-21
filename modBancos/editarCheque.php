<?php
include "../bd_conn.php";
include "../validarSesion2.php";
$cheque = $_GET['cheque'];
if (isset($_POST['submit'])) {
    $fecha = $_POST['fecha'];
    $importe = $_POST['importe'];
    $banco = $_POST['banco'];
    $cuenta = $_POST['cuenta'];

    $sqlins = "UPDATE `cheques` 
    SET `cheque`='$cheque',`fecha`='$fecha',`importe`='$importe',`banco`='$banco',`cuenta`='$cuenta' WHERE cheque=$cheque";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: cancelacionDeCheques.php?msg=Cheque Actualizado con éxito.");
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
                <li><a href="cancelacionDeCheques.php" class="menulinks"> Cancelaciones </a></li>
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
    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Editar Cheque</div>
        <?php
        $cheque = $_GET['cheque'];
        $sql = "SELECT * FROM `cheques` WHERE cheque = $cheque LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="col">
                    <label class="form-label">Fecha:</label>
                    <input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Importe:</label>
                    <input type="text" class="form-control" name="importe" value="<?php echo $row['importe'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Banco:</label>
                    <input type="text" class="form-control" name="banco" value="<?php echo $row['banco'];?>">
                </div>
                <div class="col">
                    <label class="form-label">Cuenta:</label>
                    <input type="text" class="form-control" name="cuenta" value="<?php echo $row['cuenta'];?>">
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
                <a href="cancelacionDeCheques.php" class="btn btn-danger" style="margin-bottom: 30px;">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>