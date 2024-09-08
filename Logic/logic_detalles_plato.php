<?php


if (!empty($_POST["detalles"])) {
  $plato_id = $_POST["plato_id"];
  $sql = $conex->query("SELECT nombre_plato, precio, imagen, descripcion FROM platos WHERE plato_id = $plato_id");
}
