<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>

       
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">             
    <link rel="stylesheet" href="css/bootstrap.min.css">                                    
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/config.css">
    <link rel="stylesheet" href="css/fondo.css">    
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/hover.css">                           

</head>
<body>
     <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>    
             <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed"
                             data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#top">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="turistas/index.php">Turista</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ciudades/ciudadesindex.php">Ciudades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="asgturista/asig.php">Historial de viajes</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> 
            </div> 
        </div>
    <div class="container">
        <div class="card">
            <img src="img/Turismo.jpg">
            <h4>Turista</h4>
            <p>Aqui podras ver los turista registrados</p>
            <a href="turistas/index.php">Ver</a>
        </div>
        <div class="card">
            <img src="img/ciudades.png">
            <h4>Ciudades</h4>
            <p>Aqui podras ver las ciudades registradas</p>
            <a href="ciudades/ciudadesindex.php">Ver</a>
        </div>
    </div>
</body>
</html>