<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $ident = $_POST['ident'];
    $TipIdent = $_POST['TipIdent'];
    $viaje = $_POST['viaje'];
    $PresuViaje = $_POST['PresuViaje'];
    $Dest = $_POST['Dest'];
    $us_tarjeta = $_POST['us_tarjeta'];
    $gender = $_POST['gender'];


    $sql = "INSERT INTO `turist.1` (`id`, `nombre`, `fecha`, `ident`, `TipIdent`, `viaje`, `PresuViaje`, `Dest`, `us_tarjeta`, `gender`)
    VALUES (NULL, '$nombre', '$fecha' ,'$ident' ,'$TipIdent','$viaje','$PresuViaje','$Dest','$us_tarjeta','$gender')";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        header("Location: index.php?msg=New record created succesfulty");
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
    <title>Turista nuevo</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color: #00ff5573; ">
        Turistas nuevo
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Agregar Nuevo Turista</h3>
            <p class="text-muted">Completa el Formulario de nuevo Turista</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label  class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" 
                    placeholder="Nombre Completo">
                </div>
                <div class="col">
                    <label  class="form-label">Fecha de nacimiento</label>
                    <input type="text" class="form-control" name="fecha" 
                    placeholder="Ingresa Fecha de Nacimiento">
                </div>
                <div class="mb-3-md-8">
                    <label  class="form-label">Identificacion</label>
                    <input type="text" class="form-control" name="ident" 
                    placeholder="Ingresa tu identificacion">
                </div>
                <div class="col-md-8">
                    <label  class="form-label">Tipo de Identificacion</label>
                    <input type="text" class="form-control" name="TipIdent" 
                    placeholder="Tipo de Identificacion">
                </div>
                <div class="col-6 col-md-4">
                    <label  class="form-label">Cual es tu Frecuencia de viaje</label>
                    <input type="text" class="form-control" name="viaje" 
                    placeholder="Ingresa Frecuencia de ">
                </div>
                <div class="col">
                    <label  class="form-label">Cual es tu presupuesto de viaje</label>
                    <input type="text" class="form-control" name="PresuViaje" 
                    placeholder="Ingresa tu presupuesto de viaje">
                </div>
                <div class="col">
                    <label  class="form-label">Cual es tu pais/ciudad de destino</label>
                    <input type="text" class="form-control" name="Dest" 
                    placeholder="Ingresa tu destino">
                </div>
                <div class="col">
                    <label  class="form-label">¿Usa tarjeta de crédito?</label>
                    <input type="text" class="form-control" name="us_tarjeta" 
                    placeholder="¿Usa tarjeta de crédito?">
                </div>

                <div class="form-group mb-3">
                    <label>Gander:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="male" value="male">
                    <label for="male" class="form-input-label">Hombre</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="female" value="female">
                    <label for="male" class="form-input-label">Mujer</label>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
                
            </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>