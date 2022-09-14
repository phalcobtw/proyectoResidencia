<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siatec";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Conexion fallida" . mysqli_connect_error());
}
/* echo "Conexion con exito"; */
?>