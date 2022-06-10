<html> 
    <head> 
        <title> Bienvenido, Administrador. </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="CSS/magnific-popup.css"> 
    </head>

    <body>
        <header role="banner">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand">&nbsp; El Rinconcito </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item"> <a class="nav-link active" href="admin.php">  &nbsp; Hola, Admin. ¡Bienvenido!  &nbsp; </a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="admin.php">  &nbsp; Cerrar Sesión  &nbsp; </a> </li>
                </ul>
                </div>
            </div>
            </nav>
        </header>

      <section class="site-section">
        <div class="">
            <div class="">
                <div class="col-md-12 pr-5">
                <h1 class="mb-3"> Historial de Reservaciones </h1>
                <p class="mb-3"> Aqui puedes ver el historial de reservaciones. </p>
                </div>

                <div class="col-md-12 form-group">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th> Nombre(s) </th>
                                <th> Apellido(s) </th>
                                <th> E-mail </th>
                                <th> No. de personas </th>
                                <th> No. de mesa </th>
                                <th> Costo por reservación </th>
                                <th> Fecha y hora de reserva </th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                    <?php 
                                        include("mostrar.php");
                                    ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    </body>
    
    <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/jquery-migrate-3.0.0.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/magnific-popup-options.js"></script>
   <script src="js/main.js"></script>
   <script src="js/acciones.js"></script>
</html>