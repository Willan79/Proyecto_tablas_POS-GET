<?php
session_start(); // Para indicar inicio de sesión

if(!empty($_POST["btnIngresar"])){

  if(empty($_POST["email"]) and empty($_POST["contraseña"])){
    echo '<div class="alert alert-danger"><h5><i class="bi bi-exclamation-triangle"></i>  Error: hay campos vacíos.</h5></div>';
    
  }else{
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    $sql = $conex->query("SELECT * FROM clientes WHERE email = '$email' and contrasena = '$contraseña' ");

    if($datos = $sql->fetch_object()){ // Si el usuario existe
      $_SESSION["id"]= $datos->cliente_id;
      $_SESSION["nombre"]= $datos->nombre;
      $_SESSION["apellido"]= $datos->apellido;
      header("location: /views/menu.php");
    }else{
      echo '<div class="alert alert-danger"><h5><i class="bi bi-exclamation-triangle"></i> Error de datos inválidos.</h5></div>';
    }

  }
  
?>
  <script>
    // script para evitar que aparesca una alerta al refrescar la pagina.
    history.replaceState(null, null, location.pathname);
  </script>

<?php 
}
?>