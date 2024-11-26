<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<a href="crear.php" class="button">Volver</a>
</body>
</html>
<?php
    include 'bd.php';
    session_start();
    $id_bombero = $_POST['id_bombero'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $operatividad = $_POST['operatividad'];
    $id_cuartel = $_POST['id_cuartel'];
    $radio_acargo = $_POST['radio_acargo'];


    $stmt_check = $conn->prepare("SELECT ID_Cuartel FROM cuarteles WHERE ID_Cuartel = ?");
    $stmt_check->bind_param("i", $id_cuartel);
    $stmt_check->execute();
    $stmt_check->store_result();
    
    if ($stmt_check->num_rows == 0) {
        die("Error: El ID_Cuartel especificado no existe en la tabla cuarteles.");
    }
    
    $stmt_check->close();
    
    $stmt = $conn->prepare("INSERT INTO bomberos (ID_Bombero, Nombre, Teléfono, Fecha_Ingreso, Operatividad, ID_Cuartel, radio_acargo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }
    
    $stmt->bind_param("isssssi", $id_bombero, $nombre, $telefono, $fecha_ingreso, $operatividad, $id_cuartel, $radio_acargo);
    
    if ($stmt->execute()) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
    ?>