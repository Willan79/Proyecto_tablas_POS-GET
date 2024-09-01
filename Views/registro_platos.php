<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo plato</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/registro.css">
</head>

<body class="regis">

  <form id="reg" action="../logic/logic_platos.php" method="POST" enctype="multipart/form-data">
    <h4 class="tit-reg">Nuevo plato</h4>
    <?php
    // Llamamos los archivos Database.php y logic_platos.php
    //include_once "../Data/Database.php";
    //include "../logic/logic_platos.php";
    ?>
    <div class="mb-2">
      <label for="categoria" class="form-label">Categoria</label>
      <select class="form-select" aria-label="Default select example" id="categoria" name="menu_id">
        <option selected></option>
        <option value="1">Corriente</option>
        <option value="2">Ejecutivo</option>
        <option value="3">Especial</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="nomPlato" class="form-label">Nombre del plato</label>
      <input type="text" class="form-control" id="nomPlato" name="nombre_plato">
    </div>

    <div class="mb-2">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea type="text" class="form-control" id="descripcion" name="descripcion"></textarea>
    </div>
    <div class="mb-2">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="file" class="form-control" aria-label="file example" id="imagen" name="imagen" required>
    </div>
    <div class="mb-2">
      <label for="precio" class="form-label">Precio</label>
      <input type="text" class="form-control" id="precio" name="precio">
    </div>
    <div class="mb-2">
      <label for="cantidad" class="form-label">Cantidad disponible</label>
      <input type="text" class="form-control" id="cantidad" name="cantidad">
    </div>

    <!-- (name="nuevoP") para llamarlo desde logic_platos.php -->
    <button type="submit" class="btn btn-primary" name="nuevoP" value="ok">Crear</button>
    <button type="reset" class="btn btn-success" name="limpiar" value="ok">limpiar</button>

  </form>

</body>

</html>