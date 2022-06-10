<?php
    include('conexion.php');

    if(isset($_POST['eliminar'])) {
        if (strlen($_POST['elimCita']) >= 1) {
            $num_cita = trim($_POST['elimCita']); 

            $eliminar_cita = "DELETE FROM citas WHERE num_cita = $num_cita";
            $consulta = mysqli_query($bd_barberia, $eliminar_cita);
            
            if($consulta) {
                ?>
                    <p> <?php echo 'Tu cita ha sido eliminada correctamente.'; ?> </p>
                <?php
            } else {
                ?>
                    <p> <?php echo 'La cita no existe, prueba con otro numero de cita'; ?> </p>
                <?php
            }
        } else {
            echo "Debes ingresar tu numero de cita.";
        }
    }
?>