<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo servicio</title>

  <?php include_once "../Views/layouts/bootstrap.php" ?>
  <link rel="stylesheet" href="/public/css/registro.css">
</head>

<body class="regis">
  
<!-- enctype="multipart/form-data" permite trabajar con archivos ejemplo imagenes  -->
  <form id="reg"  method="POST" enctype="multipart/form-data">
  <!-- action="../logic/logic_platos.php"-->
    <h4 class="tit-reg">Nuevo servicio</h4>
    <?php
    
    // Llamamos los archivos Database.php y logic_platos.php
    include_once "../Data/Database.php";
    include "../logic/logic.servicio.php";
    ?>
    <div class="mb-2">
      <label for="nomPlato" class="form-label">Nombre del servicio</label>
      <input type="text" class="form-control" id="nomPlato" name="nombre_servicio">
    </div>

    <div class="mb-2">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="1"></textarea>
    </div>
    <div class="mb-2">
      <label for="imagen" class="form-label">Imagen</label>
      <input type="file" class="form-control" aria-label="file example" id="imagen" name="imagen" required>
    </div>

    <!-- (name="nuevoP") para llamarlo desde logic_platos.php -->
    <button type="submit" class="btn btn-primary" name="servicio" value="ok">Crear</button>
    <button type="reset" class="btn btn-success" name="limpiar" value="ok">limpiar</button>

  </form>

</body>

</html>