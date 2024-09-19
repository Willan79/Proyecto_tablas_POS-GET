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
    include "../logic/logic_servicios.php";
    ?>
    <div class="mb-2">
      <label for="nombre" class="form-label">nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre">
    </div>

    <div class="mb-2">
      <label for="servicio" class="form-label">servicio</label>
      <textarea type="text" class="form-control" id="servicio" name="servicio" placeholder="El Servicio Que Deseas" rows="1"></textarea>
    </div>
    <div class="mb-2">
      <label for="celular" class="form-label">numero de celular</label>
      <input type="number" class="form-control" aria-label="file example" id="celular" name="celular" pattern="[0-9]{10}" required placeholder="Ej: 3001234567">
    </div>

    <!-- (name="nuevoP") para llamarlo desde logic_platos.php -->
    <button type="submit" class="btn btn-primary" name="enterServicio" value="ok">enviar</button>
    <button type="reset" class="btn btn-success" name="limpiar" value="ok">limpiar</button>

  </form>

</body>

</html>