<?php
// Logica de registro de Usuarios
// name (registrar) del boton (Registrar) del archivo (registro_user.php)
if (!empty($_POST["registrar"])) {


    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $barrio = $_POST["barrio"];
    $calle_carrera = $_POST["calle_carrera"];
    $numero = $_POST["numero"];
    $contraseña = $_POST["contrasena"];

    $direccion = "INSERT INTO direccion( barrio, calle_carrera, numero)
        values('$barrio' ,'$calle_carrera', '$numero')";
    $direccion = mysqli_query($conex, $direccion);





    if ($direccion == 1) {

        // trae el id de la tabla direccion que se acaba de insertar
        $direccion_id = $conex->insert_id;

        $clientes = "INSERT INTO clientes(direccion_id, nombre, apellido, email, telefono, contrasena)
        values('$direccion_id','$nombre', '$apellido', '$email','$telefono', '$contraseña')";
        $clientes = mysqli_query($conex, $clientes);

        echo '<div class="alert alert-success">Registro exitoso</div>';
    } else {
        $conex->rollback(); //Si ocurre algún error revertirá todos los cambios que se hayan realizado en la base de datos
        echo '<div class="alert alert-danger">Error de registro</div>';
    }

?>


    <script>
        // script para evitar que aparesca una alerta al refrescar la pagina.
        history.replaceState(null, null, location.pathname);
    </script>

<?php }
?>