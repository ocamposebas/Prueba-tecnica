<?php
include "db_ciudades.php";
$id  = $_GET['id'];
$sql = "DELETE FROM `ciudades` WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: ciudadesindex.php?msg=A sido borrado con exito");
}
else{
    echo "No se pudo borrar" . mysqli_error($conn);
}
?>
