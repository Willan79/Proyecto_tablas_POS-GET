<?php

if (!empty($_GET["id"])) { 
  
  $id=($_GET["id"]);

  $sql = $conex->query("DELETE FROM direccion WHERE direccion_id=$id");

  if($sql == 1){
    echo '<div class="alert alert-success col-lg-3 col-ms-uato" >Cliente eliminado correctamente</div>';
  }else{
    echo '<div class="alert alert-danger col-lg-3 col-ms-uato">Error al eliminar el cliente</div>';

  }
  
}

?>  