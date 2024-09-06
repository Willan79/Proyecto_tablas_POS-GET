<?php

//Ejemplo ChatGPT

// Datos del cliente recibidos de un formulario (ejemplo)
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha_registro = date("Y-m-d"); // Fecha actual

// Datos de la dirección recibidos de un formulario (ejemplo)
$calle = $_POST['calle'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$codigo_postal = $_POST['codigo_postal'];
$pais = $_POST['pais'];

try {
    // Iniciar la transacción
    $conn->begin_transaction();

    // Insertar los datos del cliente
    $stmt_cliente = $conn->prepare("INSERT INTO clientes (nombre, email, telefono, fecha_registro) VALUES (?, ?, ?, ?)");
    $stmt_cliente->bind_param("ssss", $nombre, $email, $telefono, $fecha_registro);
    $stmt_cliente->execute();

    // Obtener el ID del cliente recién insertado
    $cliente_id = $stmt_cliente->insert_id;

    // Insertar los datos de la dirección
    $stmt_direccion = $conn->prepare("INSERT INTO direccion (cliente_id, calle, ciudad, estado, codigo_postal, pais) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt_direccion->bind_param("isssss", $cliente_id, $calle, $ciudad, $estado, $codigo_postal, $pais);
    $stmt_direccion->execute();

    // Confirmar la transacción
    $conn->commit();

    echo "Datos insertados correctamente.";
} catch (Exception $e) {
    // Si algo sale mal, revertir la transacción
    $conn->rollback();
    echo "Error al insertar datos: " . $e->getMessage();
} finally {
    // Cerrar los statement y la conexión
    $stmt_cliente->close();
    $stmt_direccion->close();
    $conn->close();
}
?>
