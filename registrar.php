<?php
    include("conexion.php");

    if(isset($_POST['registro'])) {
        
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $personas = trim($_POST['personas']);
        $mesas = trim($_POST['mesa']);
        $correo = trim($_POST['email']);
        $fecha = trim($_POST['fecha']);
        $costo = 49.99;
        $id_c = rand(10000, 99999999);
        $id_e = rand(10000, 99999999);
            

        $sql = "INSERT INTO `reservaciones`(`id_cliente_reservaciones`, `id_empleado_reservaciones`, `nombres_cliente_reservaciones`, `apellidos_cliente_reservaciones`, `email_cliente_reservaciones`, `numero_de_personas_reservaciones`, 
        `numero_de_mesa_reservaciones`, `costo_reservaciones`, `fecha_y_hora_reservaciones`) 
        VALUES ('0', '0', '$nombre', '$apellido', '$correo', '$personas', '$mesas', '$costo', '$fecha')";
            
        $consulta = mysqli_query($db, $sql);
       
        if($consulta) {
            ?>
                <script type="text/javascript">
                    alert("Su reservacion se realizo con exito.");
                    window.location.href="index.php";
                </script>'
            <?php
           
        } else {
            ?>
                <script type="text/javascript">
                    alert("No hemos podido reservar su mesa.");
                    window.location.href="index.php";
                </script>'
            <?php
       }
    }
?>