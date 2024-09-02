<?php




// Logica de registro de platos
//si el usuario preciona el boton valide los campos

// (!empty) verifica si el campo no está vacío
// name ["nuevoP"] del boton (crear) del archivo (registro_platos.php)
// $_POST es una superglobal en PHP, que es un array asociativo que contiene los datos enviados a través del método POST en un formulario HTML.
include_once "../Data/Database.php";

if (!empty($_POST["nuevoP"])) {

  $menu = $_POST["menu_id"];
  $nombre = $_POST["nombre_plato"];
  $descripcion = $_POST["descripcion"];

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
      //$imagen = "./imagenes/" . $nombre_img;
      $imagen = "../public/imagenes/" . $nombre_img;
    }
  }


  //$imagen=$_POST["imagen"];
  $precio = $_POST["precio"];
  $cantidad = $_POST["cantidad"];


  $sql = $conex->query("INSERT INTO platos(menu_id,nombre_plato,descripcion,imagen,precio,cantidad)values('$menu', '$nombre', '$descripcion', '$imagen','$precio', '$cantidad')");
  if ($sql == 1) {
    
    echo '<div class="alert alert-success">Registro exitoso</div>';
  } else {
    echo '<div class="alert alert-danger">Error de registro</div>';
  }
  header("location: /views/registro_platos.php");

?>

  <script>
    // script para evitar que aparesca una "alerta" al refrescar la pagina.
    history.replaceState(null, null, location.pathname);
  </script>

<?php }

?>