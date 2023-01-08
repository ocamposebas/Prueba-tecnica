<?php
include "conn-db.php";

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $ident = $_POST['Destino'];


    $sql = "INSERT INTO `asigna_turista`(`id`, `nombre`, `fecha`, `Destino`) 
    VALUES (NULL,'$nombre','$fecha','$ident')";
    
    $result = mysqli_query($conn, $sql); 
    if($result){
        header("Location: asig.php?msg=Turista asignado");
    }else{
        echo "Failed: "  . mysqli_error($conn);
    }    
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ciudad nueva</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color: #00ff5573; ">
        Agrega Turista A ciudad destino
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Agrega Turista A ciudad destino</h3>
            <p class="text-muted">Completa este Formulario para añadir un turista a una ciudad</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label  class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" 
                    placeholder="Nombre Ciudad">
                </div>
                <div class="col">
                    <label  class="form-label">Fecha del viaje</label>
                    <input type="text" class="form-control" name="fecha" 
                    placeholder="Ingresa Fecha">
                </div>
                <div class="mb-3-md-8">
                    <label  class="form-label">Ingresa tu destino</label>
                    <input type="text" class="form-control" name="Destino" 
                    placeholder="Ingrese tu destino">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Asignar</button>
                    <a href="asignarTurista.php" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>