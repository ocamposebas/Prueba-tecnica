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
    <link rel="stylesheet" href="../css/styles.css">
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
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color: #00ff5573; ">
        Turistas nuevo
    </nav>
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
        <a href="add_new.php" class="btn btn-dark mb-3">Agregar Turista a ciudad</a>
    </div>
    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Tipo de Identificacion</th>
            <th scope="col">Frecuencia de Viaje</th>
            <th scope="col">Presupuesto de Viaje</th>
            <th scope="col">Destino</th>
            <th scope="col">¿Usa tarjeta de crédito?</th>
            <th scope="col">Genero</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
               <?php
               include "conn-db.php";

                    $sql = "SELECT * FROM `turist.1`";
                    $result =  mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            
                                <th><?php  echo $row['id'] ?></th>
                                <th><?php  echo $row['nombre'] ?></th>
                                <th><?php  echo $row['fecha'] ?></th>
                                <th><?php  echo $row['ident'] ?></th>
                                <th><?php  echo $row['TipIdent'] ?></th>
                                <th><?php  echo $row['viaje'] ?></th>
                                <th><?php  echo $row['PresuViaje'] ?></th>
                                <th><?php  echo $row['Dest'] ?></th>
                                <th><?php  echo $row['us_tarjeta'] ?></th>
                                <th><?php  echo $row['gender'] ?></th>
                                <td> 
                                    <a href="add_tourist.php?id=<?php echo $row['id'] ?>" 
                                    class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 
                                    me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
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



</body>
</html>