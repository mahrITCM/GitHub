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
                                <th> Id Cliente </th>
                                <th> Atendido por </th>
                                <th> Nombre(s) </th>
                                <th> Apellido(s) </th>
                                <th> E-mail </th>
                                <th> No. de personas </th>
                                <th> No. de mesa </th>
                                <th> Costo por reservación </th>
                                <th> Fecha y hora de reserva </th>
                                <th>  </th>
                                <th>  </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td> 1 </td>  
                                    <td> Adrian Juarez  </td>
                                    <td> Luis Gerardo </td>
                                    <td> Castillo Sanchez </td>
                                    <td> cuentafalsauno001@protonmail.com </td>
                                    <td> 5 </td>
                                    <td> 5 </td>
                                    <td> $49.99 MXN</td>
                                    <td> 2022-06-01 | 22:00:00 </td>
                                    <td><a href="/eliminar_admin/{{r.0}}" class="btn btn-primary" onclick="window.open('#','_blank'); window.open(this.href,'_self');"> Eliminar Reservación </td>
                                    <td><a class="btn btn-primary" onclick=" alerts()"> Atender Reservación </td> 
                                </tr>
                                
                                <tr>
                                    
                                    <td> 2 </td>  
                                    <td> Mirna Rangel  </td>
                                    <td> Miriam Areli </td>
                                    <td> Hernandez Reyes </td>
                                    <td> L19071590@cdmadero.tecnm.mx </td>
                                    <td> 4 </td>
                                    <td> 4 </td>
                                    <td> $49.99 MXN</td>
                                    <td> 2022-06-01 | 13:00:00 </td>
                                    <td><a href="/eliminar_admin/{{r.0}}" class="btn btn-primary" onclick="window.open('#','_blank'); window.open(this.href,'_self');"> Eliminar Reservación </td>
                                    <td><a class="btn btn-primary" onclick=" alerts()"> Atender Reservación </td> 
                                </tr>
                                
                                <tr>
                                    
                                    <td> 3 </td>  
                                    <td> Marco Juarez  </td>
                                    <td> Carlos Alberto  </td>
                                    <td> Rios Martinez </td>
                                    <td> rmartinez09@gmail.com </td>
                                    <td> 12 </td>
                                    <td> 6 </td>
                                    <td> $49.99 MXN</td>
                                    <td> 2022-06-01 | 17:00:00 </td>
                                    <td><a href="/eliminar_admin/{{r.0}}" class="btn btn-primary" onclick="window.open('#','_blank'); window.open(this.href,'_self');"> Eliminar Reservación </td>
                                    <td><a class="btn btn-primary" onclick=" alerts()"> Atender Reservación </td> 
                                </tr>
                                
                                <tr>
                                    
                                    <td> 4 </td>  
                                    <td> Mario Enriquez  </td>
                                    <td> Mario Abraham  </td>
                                    <td> Betancourt de la Cruz</td>
                                    <td> btCourt12@gmail.com </td>
                                    <td> 8 </td>
                                    <td> 2 </td>
                                    <td> $49.99 MXN</td>
                                    <td> 2022-06-01 | 17:00:00 </td>
                                    <td><a href="/eliminar_admin/{{r.0}}" class="btn btn-primary" onclick="window.open('#','_blank'); window.open(this.href,'_self');"> Eliminar Reservación </td>
                                    <td><a class="btn btn-primary" onclick=" alerts()"> Atender Reservación </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <a name="atender">
      <section class="site-hero2 overlay">
         <br> <br> 
         <div class="">
            <div class="">
               <div class="col-md-8 pr-5">
                  <h1> Atender Reservación </h1>
                  <br>
                  <br>
               </div>
               <div class="col-md-12">
                  <form method="post">
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="name">
                              <p> Nombre(s) del meser@: </p>
                           </label>
                           <input type="text" id="name" name="nombre" class="form-control " 
                              required>
                        </div>
                        <div class="col-md-4 form-group">
                           <label for="app">
                              <p> Apellido(s) del meser@: </p>
                           </label>
                           <input type="text" id="apellidos" name="apellido" class="form-control" 
                              required>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="number">
                              <p> Mesa: </p>
                           </label>
                           <input type="number" id="no" name="no" class="form-control" minlength="10"  required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 form-group">
                           <input type="submit" name="registro" value="Atender Mesa" class="btn btn-primary">
                        </div>
                     </div>
                     <div class="window-notice" id="window-notice">
                        <div class="content">
                           <div class="content-text">
                              <?php
                                 ?>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <br> <br> 
      </section>
   </a>
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