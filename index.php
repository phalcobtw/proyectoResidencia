<?php
    include "bd_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion - SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header class="p-3 bg-primary text-white">
        <div class="divheader">
        <div class="divlogo">
            <img src="img/logosep.png" alt="logosep" class="logosep">
            <b class="titulo">SIATEC</b>
        </div>
        </div>

    </header>
</body>
<?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
<div class="d-flex flex-column min-vh-100 justify-content-center  align-items-center" id="template-bg-3">
    <div class="card mb-5 p-5 bg-transparent bg-gradient text-black col-md-4 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-header text-center bg-transparent">
                <h3>Iniciar Sesión </h3>
            </div>
            <div class="card-body mt-3">
                <form action="validar.php" method="POST">
            
            <div class="input-group form-group mt-3">
                        <input type="text" class="form-control text-left p-3" placeholder="Usuario" name="usuario" id="usuario">
                    </div>
                    <div class="input-group form-group mt-3">
                        <input type="password" class="form-control text-left p-3" placeholder="Contraseña" name="contraseña" id="contraseña">
                    </div>
                    <input type="submit" value="Iniciar Sesión" class="btn btn-dark mt-3 w-100 p-2">
                    </form>
                    </div>
                    <div class="text-center">
                
            </div>
    </div>

</div>
</html>