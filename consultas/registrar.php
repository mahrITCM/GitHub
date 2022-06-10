<?php
    include("conexion.php");

    if(isset($_POST['registro'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1  && strlen($_POST['telefono']) >= 1
            && strlen($_POST['OS']) >= 1
            && strlen($_POST['email']) >= 1
            && strlen($_POST['fecha'] >= 1)) {
            
            $num_cita = rand(10000, 99999999);
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $servicio = trim($_POST['OS']);
            $telefono = trim($_POST['telefono']);
            $email = trim($_POST['email']);
            $fecha = trim($_POST['fecha']);

            $registro_cita = "INSERT INTO citas(num_cita, fecha_cita, FK_servicios, nombre_cliente, apellido_cliente, email_cliente, telefono_cliente) 
            VALUES ('$num_cita', '$fecha', '$servicio', '$nombre', '$apellido', '$email', '$telefono')";
            $consulta = mysqli_query($bd_barberia, $registro_cita);
            
            if($consulta) {
                echo "Cita registrada con exito";
            } else {
                echo "Debes de llenar todos los campos";
            }
        } else {
            echo "Err";
        }
    }
?>