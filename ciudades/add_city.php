<?php
include "db_ciudades.php";

if(isset($_POST['submit'])){
    $nombre = $_POST['Nombre'];
    $habitantes = $_POST['habitantes'];
    $Dest = $_POST['Dest'];
    $hoteles = $_POST['hoteles'];



    $sql = "INSERT INTO `ciudades`(`id`, `Nombre`, `habitantes`, `Dest`, `hoteles`) 
    VALUES (NULL, '$nombre','$habitantes','$Dest','$hoteles')";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        header("Location: ciudadesindex.php?msg=New record created succesfulty");
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
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color: #00ff5573; ">
        Ciudad nueva
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Agregar ciudad nueva</h3>
            <p class="text-muted">Completa este Formulario para añadir una ciudad</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label  class="form-label">Nombre Ciudad</label>
                    <input type="text" class="form-control" name="Nombre" 
                    placeholder="Nombre Ciudad">
                </div>
                <div class="col">
                    <label  class="form-label">habitantes</label>
                    <input type="text" class="form-control" name="habitantes" 
                    placeholder="Ingresa numero de habitantes">
                </div>
                <div class="mb-3-md-8">
                    <label  class="form-label">Sitio más turístico</label>
                    <input type="text" class="form-control" name="Dest" 
                    placeholder="Sitio más turístico">
                </div>
                <div class="col-md-8">
                    <label  class="form-label">Hoteles cercanos</label>
                    <input type="text" class="form-control" name="hoteles" 
                    placeholder="Hoteles Cercanos">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Guardar</button>
                    <a href="ciudadesindex.php" class="btn btn-danger">Cancelar</a>
                </div>
                
            </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>