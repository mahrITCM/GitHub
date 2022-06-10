<?php
    include("conexion.php");

    $sql = "SELECT `nombres_cliente_reservaciones`, `apellidos_cliente_reservaciones`, `email_cliente_reservaciones`, `numero_de_personas_reservaciones`, 
    `numero_de_mesa_reservaciones`, `costo_reservaciones`, `fecha_y_hora_reservaciones` FROM reservaciones";
    
    $consulta = mysqli_query($db, $sql);

    while($mostrar = mysqli_fetch_array($consulta)) {
        ?>               
        <tr>
            <td> <?php echo $mostrar['nombres_cliente_reservaciones'] ?> </td>
            <td> <?php echo $mostrar['apellidos_cliente_reservaciones'] ?> </td>
            <td> <?php echo $mostrar['email_cliente_reservaciones'] ?> </td>
            <td> <?php echo $mostrar['numero_de_personas_reservaciones'] ?> </td>     
            <td> <?php echo $mostrar['numero_de_mesa_reservaciones'] ?> </td>  
            <td> $<?php echo $mostrar['costo_reservaciones'] ?>MXN</td>  
            <td> <?php echo $mostrar['fecha_y_hora_reservaciones'] ?> </td>  
        </tr>
        <?php
    }
?>