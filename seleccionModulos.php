<?php
include "validarSesion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulos- SIATEC</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <br>
        <table width="700" align="center" cellspacing="15" cellpadding="15">
            <tr>
              <td><a href="./modBancos/sisban.php"><img src="./img/bancos.png" onclick="" id="img_bancos" height="27"></a></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td><a href="./modAnticipos/sisant.php"><img src="./img/anticipos.png" onclick="" id="img_anticipos" height="27"></a></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><a href="./modProvee/sispro.php"><img src="./img/provee.png" onclick="" id="img_provee" height="27"></a></td>
              <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="./modConta/siscon.php"><img src="./img/conta.png" onclick="" id="img_conta" height="27"></a></td>
              </tr>
          </table>
       
</body>

</html>