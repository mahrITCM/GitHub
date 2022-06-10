<?php
    include('conexion.php');
    try {
        if(isset($_POST['consultar'])) {
            if (strlen($_POST['consultarNum']) >= 1) {
                $num_cita = trim($_POST['consultarNum']); 
                $consulta = "SELECT num_cita, fecha_cita, nombre_cliente, apellido_cliente FROM citas WHERE num_cita = $num_cita";
                $consulta1 = mysqli_query($bd_barberia, $consulta);
                $dato = "";
                $id = "";
                $id_serv = "";

                // Consultar datos principales de la tabla de citas 
                // -----------------------------------------------------------------------------//
               
                while($mostrar = mysqli_fetch_array($consulta1)) {                                              
                    if ($num_cita == $mostrar['num_cita']) {
                        ?>               
                            <td> <?php echo $mostrar['num_cita'] ?> </td>
                            <td> <?php echo $mostrar['fecha_cita'] ?> </td>
                            <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
                            <td> <?php echo $mostrar['apellido_cliente'] ?> </td>     
                            <p> <?php echo $mostrar?> </p>

                        <?php

                        $dato = $mostrar['num_cita'];
                    } else {
                        ?>
                            <p> <?php echo 'La cita no existe.'; ?> </p>
                        <?php
                    }

                }

                $obtener_id = "SELECT id_cliente FROM citas WHERE num_cita = $dato";
                $consultar_idCliente = mysqli_query($bd_barberia, $obtener_id); 
                if (!$consultar_idCliente) {
                    ?>
                        <p> <?php echo 'La cita no existe, prueba con otro numero de cita'; ?> </p>
                    <?php
                } else {   
                    // obtener el id del cliente
                    // -----------------------------------------------------------------------------//
                    while($get_id = mysqli_fetch_array($consultar_idCliente)) {
                        $id = $get_id['id_cliente'];
                    }

                    $obtener_id_serv = "SELECT FK_servicios From citas WHERE id_cliente = $id"; 
                    $consultar_idServ = mysqli_query($bd_barberia, $obtener_id_serv);

                    // Consultar el id del servicio 
                    // -----------------------------------------------------------------------------//
                    while($get_idServ = mysqli_fetch_array($consultar_idServ)) {
                            
                        $id_serv = $get_idServ['FK_servicios'];
                    }

                    $obtener_serv =  "SELECT tipo_servicio, costo_servicio FROM servicios WHERE id_servicio = $id_serv";
                    $consultar_servs = mysqli_query($bd_barberia, $obtener_serv);

                    // consultar el servicio en base a su id 
                    // -----------------------------------------------------------------------------//
                    while($get_servs = mysqli_fetch_array($consultar_servs)) {
                        ?>
                            <td> <?php echo $get_servs['tipo_servicio'] ?> </td>
                            <td> $<?php echo $get_servs['costo_servicio'] ?>MXN </td>
                        <?php
                    }
                }
            }
        } else {
            ?>
                <p> <?php echo 'La cita no existe.'; ?> </p>
            <?php
        }
    }  catch (Exception $e) {
        ?>
            <p> <?php echo 'La cita no existe.'; ?> </p>
        <?php
    }   
?>