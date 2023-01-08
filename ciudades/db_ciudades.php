<?php
$servername = "localhost";
$usarname = "root";
$password = "";
$dbname = "tuistas.cd";


$conn = mysqli_connect($servername, $usarname, $password, $dbname);

if(!$conn){
    die("conection Failed" .  mysqli_connect_error());
}
//echo "Conectada con exito";
?>