<?php
if (!empty($_POST["servicio"])) {

  $nombre = $_POST["nombre_servicio"];
  $descripción = $_POST["descripcion"];

  // El siguiente código es para poder validar las imagenes
  $imagen = "????";
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
      $src = $carpeta . $nombre_img;
      move_uploaded_file($ruta_provicional, $src);
      $imagen = "../public/imagenes/" . $nombre_img;
    }
  }// Fin de validación de imagenes

  $sql = $conex->query("INSERT INTO servicios(nombre, descripción, foto)
  values('$nombre', '$descripción', '$imagen')");

  if ($sql == 1) {
    header('Location: ../Views/admin_servicio.php?status=success');
    exit();
  } else {
    echo '<div class="alert alert-danger">Error de registro</div>';
  }

?>

  <script>
    // script para evitar que aparesca una "alerta" al refrescar la pagina.
    history.replaceState(null, null, location.pathname);
  </script>

<?php }

?>