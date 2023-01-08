<?php
include "db_conn.php";
$id  = $_GET['id'];
$sql = "DELETE FROM `turist.1` WHERE id=$id";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: index.php?msg=A sido borrado con exito");
}
else{
    echo "No se pudo borrar" . mysqli_error($conn);
}
?>
