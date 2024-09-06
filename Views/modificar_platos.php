<?php
// Para traer todos los datos al formulario de (modificar_platos.php) con un determinado (id)
$id = $_GET["id"];
include_once "../Data/Database.php";
$sql = $conex->query("SELECT * FROM platos WHERE plato_id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar plato</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/registro.css">
</head>

<body class="regis">

  <form id="reg" method="POST" enctype="multipart/form-data">
    <h4 class="tit-reg">Modificar plato</h4>

    <!-- Se crea un imput para traer el id, pero el imput no se debe mostrar en el formulario-->
    <!-- (type="hidden") para que no se muestre el imput -->
    <!-- (value=" $_GET["id"]) para traer el (id) al formulario -->
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

    <?php
    include "../Logic/logic_modificar_plato.php";

    while ($datos = $sql->fetch_object()) { ?>

      <div class="mb-2">
        <label for="categoria" class="form-label">Categoria</label>
        <select class="form-select" aria-label="Default select example" id="categoria" name="menu_id">
          <option selected id="categoria" name="menu_id" value="<?= $datos->menu_id ?>"></option>
          <option value="1">Corriente</option>
          <option value="2">Ejecutivo</option>
          <option value="3">Especial</option>
        </select>

      </div>
      <div class="mb-2">
        <label for="nomPlato" class="form-label">Nombre del plato</label>
        <input type="text" class="form-control" id="nomPlato" name="nombre_plato" value="<?= $datos->nombre_plato ?>">
      </div>

      <div class="mb-2">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $datos->descripcion ?>"></textarea>

      </div>

      <div class="mb-2">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" aria-label="file example" id="imagen" name="imagen" value="<?= $datos->imagen ?>" required>
      </div>

      <div class="mb-2">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="<?= $datos->precio ?>">
      </div>
      <div class="mb-2">
        <label for="cantidad" class="form-label">Cantidad disponible</label>
        <input type="text" class="form-control" id="cantidad" name="cantidad_disponible" value="<?= $datos->cantidad_disponible ?>">
      </div>

    <?php
    }
    ?>

    <button type="submit" class="btn btn-primary" name="modificarP" value="ok">Modificar</button>

  </form>

</body>

</html>