<html>
   <head>
      <title> El Rinconcito | Inicio </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                  <li class="nav-item"> <a class="nav-link active" href="#nosotros"> &nbsp; Nosotros </a> </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link active dropdown-toggle"> &nbsp; Nuestros menus </a>
                     <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item navbar-dark" href="pdf/Menu_Comida.pdf" target="_blank"> Platillos </a>
                        <a class="dropdown-item navbar-dark" href="pdf/Menu_Bebidas.pdf" target="_blank"> Bebidas </a>
                        <a class="dropdown-item navbar-dark" href="pdf/Menu_Postres.pdf" target="_blank"> Postres </a>
                     </div>
                  </li>
                  <li class="nav-item"> <a class="nav-link active" href="#reservaciones">   &nbsp; Reservaciones  </a> </li>
                  <li class="nav-item"> <a class="nav-link active" href="#contacto">   &nbsp; Contacto  &nbsp; </a> </li>
                  <li class="nav-item"> <a class="nav-link active" href="admin.php">   &nbsp; Iniciar Sesion  &nbsp; </a> </li>
               </ul>
            </div>
         </nav>
      </header>
      <section class="site-hero overlay" style=" background-image: url(img/fondo_index.jpg); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
         <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
               <div class="col-md-8 text-center">
                  <br> <br> <br> <br>
                  <div class="mb-4"> <img src="img/logo_fondo_blanco.png" alt="Image placeholder" class="img-md-fluid"> </div>
               </div>
            </div>
         </div>
      </section>
      <a name="nosotros">
         <section class="site-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 video-wrap mb-5"> <img src="img/img_nosotros.png" alt="Image placeholder" class="img-md-fluid">  </div>
                  <div class="col-md-6 pl-md-5">
                     <h2 class="whiteColor"> Nosotros </h2>
                     <br> 
                     <h4 class="whiteColor"> El Rinconcito </h4>
                     <p class="whiteColor" align="justify"> A través de la presente, restaurante "EL RINCONCITO " tiene el agrado de enviarles un cordial saludo y presentarse ante ustedes. 
                        El Rinconcito es un restaurante especializado en la gastronomía de nuestro país. Tenemos un personal de cocineros con vasta experiencia y un gusto exquisito en la preparación de nuestras delicias culinarias.
                        <br><br>
                        Utilizamos los mejores insumos y la mejor atención para hacer que su experiencia en nuestro restaurante sea única.
                        Por oferta de lanzamiento tenemos descuentos especiales en los horarios de 5 PM a 8PM. <br><br> Si desea consultar nuestra carta puede interesar a nuestra página web. <br> 
                        Puede hacer sus reservaciones a través de nuestra página o comunicándose con nuestra central telefónica. <br> <br>
                        No olvides que en el restaurante El Rinconcito podrá disfrutar de lo mejor de la comida mexicana. 
                     </p>
                  </div>
               </div>
            </div>
         </section>
      </a>
      <a name="reservaciones">
         <section class="site-hero2 overlay" style="background-color: #3d0d09;">
            <br> <br> 
            <div class="container">
               <div class="row">
                  <div class="col-md-8 pr-5">
                     <h1> Reserva con nosotros </h1>
                     <br>
                     <br>
                  </div>
                  <div class="col-md-12">
                     <form method="post">
                        <div class="row">
                           <div class="col-md-4 form-group">
                              <label for="name">
                                 <p> Nombre(s): </p>
                              </label>
                              <input type="text" id="name" name="nombre" class="form-control " 
                                 required>
                           </div>
                           <div class="col-md-4 form-group">
                              <label for="email">
                                 <p> Apellido(s): </p>
                              </label>
                              <input type="text" id="apellidos" name="apellido" class="form-control" 
                                 required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 form-group">
                              <label for="name">
                                 <p> Número de personas: </p>
                              </label>
                              <input type="number" id="personas" name="personas" class="form-control" 
                                 required>
                           </div>
                           <div class="col-md-4 form-group">
                              <label for="name">
                                 <p> Número de mesa: </p>
                              </label>
                              <input type="number" id="mesa" name="mesa" class="form-control" 
                                 required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 form-group">
                              <label for="email">
                                 <p> Dirección de correo electrónico: </p>
                              </label>
                              <input type="email" id="email" name="email" class="form-control" minlength="10"
                                 required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 form-group">
                              <label for="fecha_cita">
                                 <p> Fecha de tu reservación: </p>
                              </label>
                              <input type="datetime-local" id="start" name="fecha" value="" max="2025-01-01T21:00"
                                 class="form-control" value="Selecciona fecha y hora para tu reservacion" minlength="10" maxlength="64"
                                 required>
                           </div>
                        </div>
                        <br> 
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <input type="submit" name="registro" value="Reservar tu mesa" class="btn btn-primary">
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
   <a name="contacto">
      <section class="site-hero2 overlay" style="background-color: #37333c;">
         <br> <br> 
         <div class="container">
            <div class="row">
               <div class="col-md-8 pr-5">
                  <h1> Contacto </h1>
                  <br>
                  <br>
               </div>
               <div class="col-md-12">
                  <form method="post">
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="name">
                              <p> Nombre(s): </p>
                           </label>
                           <input type="text" id="name" name="nombre" class="form-control " 
                              required>
                        </div>
                        <div class="col-md-4 form-group">
                           <label for="email">
                              <p> Apellido(s): </p>
                           </label>
                           <input type="text" id="apellidos" name="apellido" class="form-control" 
                              required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="servicio"> Elige el asunto de tu solicitud: </label>
                           <select name="OS">
                              <optgroup label="Asunto">
                                 <option value = 1> Facturación </option>
                                 <option value = 2> Atencion a clientes </option>
                                 <option value = 3> Recomendaciones </option>
                                 <option value = 4> Quejas </option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="phone">
                              <p> Teléfono: </p>
                           </label>
                           <input type="number" id="phone" name="telefono" class="form-control" minlength="10"  required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 form-group">
                           <label for="email">
                              <p> Dirección de correo electrónico: </p>
                           </label>
                           <input type="email" id="email" name="email" class="form-control" minlength="10"
                              required>
                        </div>
                     </div>
                     <br> 
                     <div class="row">
                        <div class="col-md-6 form-group">
                           <input type="submit" name="registro" value="Enviar" class="btn btn-primary">
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
   <footer class="site-footer">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-4">
               <h3 class="mb-4"> Ubicación </h3>
               <ul class="list-unstyled ">
                  <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class=""> Lerdo de Tejada S/N Esq. con Vicente Guerrero, Col. Obrera. Tampico Tamaulipas, México</span></li>
                  <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class=""> 833 261 45 34 </span></li>
                  <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class=""> rinconcitoRest@Gmail.com </span></li>
               </ul>
            </div>
            <div class="col-md-2">
               <h3 class="mb-4"> Directorio </h3>
               <ul class="list-unstyled ">
                  <li><a href="#"> Regresar al inicio </a></li>
                  <li><a href="pdf/Menu_Comida.pdf" target="_blank"> Menú de platillos </a></li>
                  <li><a href="pdf/Menu_Bebidas.pdf" target="_blank"> Menú de bebidas </a></li>
                  <li><a href="pdf/Menu_Postres.pdf" target="_blank"> Menú de postres </a></li>
               </ul>
            </div>
            <div class="col-md-3">
               <h3 class="mb-4"> &nbsp </h3>
            </div>
            <div class="col-md-3">
               <h3> Siguenos </h3>
               <p> <a href="#" class="p-2"><span class="fa fa-facebook"></span></a> <a href="#" class="p-2"><span class="fa fa-instagram"></span></a> </p>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-7 text-center">
               <script>
                  document.write(new Date().getFullYear());
               </script> © All rights reserved. | Restaurante "El Rinconcito" 
            </div>
         </div>
      </div>
   </footer>
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