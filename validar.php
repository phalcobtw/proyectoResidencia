<?php

$usuario = $_POST['usuario'];
$contra = $_POST['contraseña'];

session_start();
$_SESSION['usuario'] = $usuario;
include "bd_conn.php";
$consulta = "SELECT * FROM `usuarios` WHERE nombreusuario = '$usuario' AND password = '$contra'";

$resultado = mysqli_query($conn, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("Location:seleccionModulos.php");
}
else{
    header("Location:index.php?msg=Datos incorrectos");
}
mysqli_free_result($resultado);
mysqli_close($conn);


?>