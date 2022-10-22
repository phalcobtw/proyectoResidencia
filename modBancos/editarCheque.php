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
    <title>SISBAN- SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>  
  </head>
<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
        <div class="divlogo">
            <img src="../img/logosep.png" alt="logosep" class="logosep">
        </div>
        </div>
    </header>
                         <!-- todo el menu -->
                         <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                          <div class="container-fluid">
                          <a class="navbar-brand" href="#">SISBAN</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-md-center" id="main_nav">
                            <ul class="navbar-nav">
                              <li class="nav-item dropdown" id="dropdown"> 
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Cheques</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="#">Emisi&oacute;n de Cheques en Espera</a></li>
                                  <li> <a class="dropdown-item" href="emisionChequesEspecial.php">Emisi&oacute;n de Cheques Especiales</a></li>
                                  <li> <a class="dropdown-item" href="#">Cancelaciones &raquo; </a>
                                    <ul class="submenu dropdown-menu">
                                      <li><a class="dropdown-item" href="cancelacionDeCheques.php">Cancelacion de Cheques</a></li>
                                      <li><a class="dropdown-item" href="cancelacionChequesMeses.php">Cancelacion de Cheques de Meses Anteriores</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown"> Depositos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="depositos.php">Dep&oacute;sitos Bancarios</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Traspasos</a>
                                <ul class="dropdown-menu">
                                  <li> <a class="dropdown-item" href="traspasos.php">Traspasos entre Cuentas</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown" id="dropdown">
                                  <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Catalogos</a>
                                  <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="catalogobanks.php">Bancos</a></li>
                                    <li> <a class="dropdown-item" href="catalogoCuentas.php">Cuentas</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown" id="dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Reportes</a>
                                    <ul class="dropdown-menu">
                                      <li> <a class="dropdown-item" href="#">Depositos</a></li>
                                      <li> <a class="dropdown-item" href="#">Cheques</a></li>
                                      <li> <a class="dropdown-item" href="#">Saldos</a></li>
                                      <li> <a class="dropdown-item" href="#">Prueba de Impresor</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown" id="dropdown">
                                      <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Utilerias</a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cambio de Mes</a></li>
                                        <li><a class="dropdown-item" href="#">Cierre de Ejercicio</a></li>
                                        <li><a class="dropdown-item" href="#">Indexar Archivos</a></li>
                                        <li><a class="dropdown-item" href="#">Reconstruir Saldos</a></li>
                                        <li><a class="dropdown-item" href="../utilerias/controlUsuarios.php">Control de Usuarios</a></li>
                                        <li><a class="dropdown-item" href="#">Configurar Impresora</a></li>
                                        <li><a class="dropdown-item" href="#">Par&aacute;metros Sistema</a></li>
                                        <li><a class="dropdown-item" href="#">Par&aacute;metros Poliza-Cheque</a></li>
                                        <li><a class="dropdown-item" href="../utilerias/configITLM.php">Configurar</a></li>                                      
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="../seleccionModulos.php" >Salir</a>
                              </li>
                            </ul>
                          </div>
                          <!-- navbar-collapse.// -->
                          </div>
                          <!-- container-fluid.// -->
                          </nav>
                        <!-- aqui termina -->
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