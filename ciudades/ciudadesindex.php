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
    <title>CIUDAD NUEVA</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">             
    <link rel="stylesheet" href="../css/bootstrap.min.css">                                    
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/fondo.css">    
    <link rel="stylesheet" href="../css/estilos.css">                           

</head>
<body>
<header>
<div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>    
             <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" 
                            data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#top">Ciudades<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/prueba_tecnuca/turistas/" > Turista</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="http://localhost/prueba_tecnuca/asgturista/asig.php">Historial de viajes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="http://localhost/prueba_tecnuca/asgturista/add_tourist.php">Asignar turista a destino</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> 
            </div> 
        </div>
        <div class="conatiner">
        <?php
        if(isset($_GET['msg'])) {
            $msg =  $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <a href="add_city.php" class="btn btn-dark mb-3">Agrega una Ciudad nueva</a>
    </div>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Ciudad</th>
            <th scope="col">Cantidad de habitantes</th>
            <th scope="col">Sitio mas turistico</th>
            <th scope="col">Hotel mas cercano</th>
            <th scope="col">Action</th>
    
        </thead>
        <tbody>
               <?php
               include "db_ciudades.php";

                    $sql = "SELECT * FROM `ciudades`";
                    $result =  mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>  
                                <th><?php  echo $row['id'] ?></th>
                                <th><?php  echo $row['Nombre'] ?></th>
                                <th><?php  echo $row['habitantes'] ?></th>
                                <th><?php  echo $row['Dest']?></th>
                                <th><?php  echo $row['hoteles'] ?></th>
                                <td> 
                                    <a href="edit_ciudad.php?id=<?php echo $row['id'] ?>" 
                                    class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 
                                    me-3"></i></a>
                                    <a href="delete_city.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                                </tr>
                                <tr>
                        <?php
                    }
               ?>
         
    </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</header>



</body>
</html>


