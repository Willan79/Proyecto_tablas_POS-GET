<?php


if(!empty($_POST["enterServicio"])){

$cliente = $_POST["nombre"];
$servicio = $_POST["servicio"];
$telefono = $_POST["celular"];

$my_apikey = "KS4I2A6VATPPHI6QI6FX";
$destino = "573142363443" ;
$mensaje = "hola maicol  \nEl cliente ". $cliente ." desea el servicio ". $servicio . ", comunicate con el al Numero:".$telefono;
$api_url = "http://panel.rapiwha.com/send_message.php" ;
$api_url .= "?apikey=" . urlencode ($my_apikey);
$api_url .= "&number=" . urlencode ($destino);
$api_url .= "&text=" . urlencode ($mensaje);
   # se obtiene la respuesta de la API
   $response = file_get_contents($api_url);
   $my_result_object = json_decode($response);

   if ($my_result_object && $my_result_object->success == true) {
       #al enviarse el mensaje correctamente se dirige a una pagina
       header("Location: ../Views/cliente_servicio.php");
       exit(); // Asegúrate de llamar a exit() después de header() para detener la ejecución del script
   } else {
       #para saber si el mensaje no se envió correctamente
       echo "<br>Resultado: " . htmlspecialchars($my_result_object->success ?? 'No disponible');
       echo "<br>Descripción: " . htmlspecialchars($my_result_object->description ?? 'No disponible');
       echo "<br>code: " . htmlspecialchars($my_result_object->result_code ?? 'No disponible');
   }
}
?>
