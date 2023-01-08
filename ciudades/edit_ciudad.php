<?php
include "db_ciudades.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $Nombre = $_POST['Nombre'];
    $habitantes = $_POST['habitantes'];
    $Dest = $_POST['Dest'];
    $hoteles = $_POST['hoteles'];


    $sql = "UPDATE `ciudades` SET `Nombre`='$Nombre',`habitantes`='$habitantes',`Dest`='$Dest',`hoteles`='$hoteles' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        header("Location: ciudadesindex.php?msg=Ciudad Actualizada con Exito");
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
    <title>Editar Ciudad</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color: #00ff5573; ">
        Edita Ciudad
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>EDITAR LA INFROMACION DE LA CIUDAD</h3>
            <p class="text-muted">Editar ciudad</p>
        </div>

    <?php
    $sql = "SELECT * FROM  `ciudades` WHERE  id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label  class="form-label">Nombre de la ciudad</label>
                    <input type="text" class="form-control" name="Nombre" 
                    value="<?php echo $row['Nombre'] ?>">
                </div>
                <div class="col">
                    <label  class="form-label">Cantida de habitantes</label>
                    <input type="text" class="form-control" name="habitantes" 
                    value="<?php echo $row['habitantes'] ?>">
                </div>
                <div class="mb-3-md-8">
                    <label  class="form-label">Sitio mas turistico</label>
                    <input type="text" class="form-control" name="Dest" 
                    value="<?php echo $row['Dest'] ?>">
                </div>
                <div class="col-md-8">
                    <label  class="form-label">Hoteles</label>
                    <input type="text" class="form-control" name="hoteles" 
                    value="<?php echo $row['hoteles'] ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Actualizar</button>
                    <a href="ciudadesindex.php" class="btn btn-danger">Cancelar</a>
                </div>
                
            </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>