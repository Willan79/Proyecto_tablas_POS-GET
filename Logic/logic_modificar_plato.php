<?php

if (!empty($_POST["modificarP"])) {


  $id = $_POST["id"];
  $menu_id = $_POST["menu_id"];
  $nombre = $_POST["nombre_plato"];
  $descripcion = $_POST["descripcion"];

  $imagen = "Error";
  if (isset($_FILES["imagen"])) { //Sí la varible existe
    
    $file = $_FILES["imagen"];
    $nombre_img = $file["name"];
    $tipo = $file["type"];
    $ruta_provicional = $file["tmp_name"];
    $size = $file["size"];
    $dimenciones = getimagesize($ruta_provicional);
    $width = $dimenciones[0];
    $height = $dimenciones[1];
    $carpeta = "../public/imagenes/";


    if (
      $tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" &&
      $tipo != "image/png" && $tipo != "image/PNG" && $tipo != "image/gif"
    ) {
      echo "Error el archivo no es una imagen";
    } else if ($size > 3 * 1024 * 1024) { // validar que las imagenes no sean muy grande
      echo "Error el tamaño máximo permitido es 3MB";
    } else {

      try {  // Eliminar la imagen a reenplazar.
        unlink($file);
      }catch(\Throwable $th){
        //Throwable $th;
      }
      
      $ruta = $carpeta . $nombre_img;
      move_uploaded_file($ruta_provicional, $ruta);
      $imagen = "../public/imagenes/" . $nombre_img;
    }
  }

  $precio = $_POST["precio"];
  $cantidad = $_POST["cantidad_disponible"];

  $sql = $conex->query("UPDATE platos SET menu_id=$menu_id, nombre_plato='$nombre',descripcion='$descripcion',imagen='$imagen', precio='$precio',cantidad_disponible=$cantidad WHERE plato_id=$id");
  if ($sql == 1) {
    header("location:admin_platos.php"); //Sí el sql es correcto nos lleva a la tabla de platos
  } else {
    echo '<div class="alert alert-danger">Error al modificar</div>';
  }

?>


  <script>
    // script para evitar que aparesca una alerta al refrescar la pagina.
    history.replaceState(null, null, location.pathname);
  </script>

<?php }
?>