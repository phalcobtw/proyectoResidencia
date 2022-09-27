<?php
include "../bd_conn.php";
include "../validarSesion2.php";
$clave = $_GET['clave'];
$cuenta = $_GET['cuenta'];
if (isset($_POST['submit'])) {    
    $fuente = $_POST['fuente'];
    $folio = $_POST['folio'];
    $contable = $_POST['contable'];

    $sqlins = "UPDATE `catalogocuenta` 
    SET `clave`='$clave',`cuenta`='$cuenta',`fuente`='$fuente',`folio`='$folio',`contable`='$contable' WHERE clave=$clave AND cuenta='$cuenta'";
    $result = mysqli_query($conn, $sqlins);

    if ($result) {
        header("location: catalogoCuentas.php?msg=Cuenta actualizado con éxito.");
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
                <li><a href="../utilerias/controlUsuarios.php" class="menulinks">Control de Usuarios</a></li>
                                <li><a href="" class="menulinks">Configurar Impresora</a></li>
                                <li><a href="" class="menulinks">Par&aacute;metros Sistema</a></li>
                                <li><a href="" class="menulinks">Par&aacute;metros Poliza-Cheque</a></li>
                                <li><a href="../utilerias/configITLM.php" class="menulinks">Configurar</a></li>
            </ul>
        </li>
        <li><a href="../seleccionModulos.php" class="menulinks">Salir</a></li>
    </ul>
    <div class="container" style="margin-bottom: 35px;">
        <div class="text-center mb-4 fs-4">Editar Cuenta</div>
        <?php
        $clave = $_GET['clave'];
        $cuenta = $_GET['cuenta'];
        $sql = "SELECT * FROM `catalogocuenta` WHERE clave = $clave AND cuenta = '$cuenta' LIMIT 1";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Fuente:</label>
                    <input type="text" class="form-control" name="fuente" value="<?php echo $row['fuente'];?>">
                </div>
            <div class="col">
                    <label class="form-label">Folio:</label>
                    <input type="text" class="form-control" name="folio" value="<?php echo $row['folio'];?>">
                </div>
            </div>
                <div class="col">
                    <label class="form-label">Cta. Contable:</label>
                    <input type="text" class="form-control" name="contable" value="<?php echo $row['contable'];?>">
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 30px;">Guardar</button>
                <a href="catalogoCuentas.php" class="btn btn-danger" style="margin-bottom: 30px;">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>