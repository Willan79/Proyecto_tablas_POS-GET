

<?php
if (!empty($_GET["id_servico"])) {
  $id = $_GET["id_servico"];
  $sql = $conex->query("DELETE FROM servicios WHERE id_servico = $id");

  if ($sql == 1) {
    echo '<div id="mensaje"" class="alert alert-success col-lg-3 col-ms-auto">Plato eliminado correctamente</div>';
  } else {
    echo '<div id="mensaje" class="alert alert-danger col-lg-3 col-ms-auto">Error al eliminar el plato</div>';
  }
}
?>

