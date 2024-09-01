<?php
// Logica de registro de Usuarios
// name (registrar) del boton (Registrar) del archivo (registro_user.php)
if(!empty($_POST["registrar"])){ 
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["email"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["contraseña"])){
       
       $nombre=$_POST["nombre"];
       $apellido=$_POST["apellido"];
       $email=$_POST["email"];
       $telefono=$_POST["telefono"];
       $direccion=$_POST["direccion"];
       $contraseña=$_POST["contraseña"];    
       
       $sql = $conex->query("INSERT INTO clientes(nombre,apellido,email,telefono,direccion,contraseña)values('$nombre', '$apellido', '$email', '$direccion','$telefono', '$contraseña')");
       if($sql == 1){
        echo '<div class="alert alert-success">Registro exitoso</div>';
       }else{
        echo '<div class="alert alert-danger">Error de registro</div>';
       }
    }else{
        echo '<div class="alert alert-warning">Hay campos vacíos</div>';
    }?>
    
    
    <script>
        // script para evitar que aparesca una alerta al refrescar la pagina.
        history.replaceState(null,null,location.pathname);
    </script>

<?php }
?>