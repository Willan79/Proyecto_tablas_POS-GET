<?php

if (!empty($_POST["modificarP"])) {
  if(!empty($_POST["menu_id"]) and !empty($_POST["nombre_plato"]) and !empty($_POST["descripcion"]) and !empty($_POST["imagen"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])){

    $id=$_POST["id"];
    $menu_id=$_POST["menu_id"];
    $nombre=$_POST["nombre_plato"];
    $descripcion=$_POST["descripcion"];
    $imagen=$_POST["imagen"];
    $precio=$_POST["precio"];   
    $cantidad=$_POST["cantidad"];

    $sql = $conex->query("UPDATE platos SET menu_id=$menu_id,nombre_plato='$nombre',descripcion='$descripcion',imagen='$imagen',precio='$precio',cantidad=$cantidad WHERE plato_id=$id");
    if ($sql == 1) {
      header("location:admin_platos.php");//Sí el sql es correcto nos lleva a la tabla de platos
    } else {
      echo '<div class="alert alert-danger">Error al modificar</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Hay campos vacíos</div>';
  } ?>


  <script>
    // script para evitar que aparesca una alerta al refrescar la pagina.
    history.replaceState(null, null, location.pathname);
  </script>

<?php }
?>