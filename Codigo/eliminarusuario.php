<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<a href="Eliminar.php" class="button">Volver</a>
</body>
</html>

<?php
include 'bd.php';
if (isset($_POST['ID_Bombero'])) {
    $ID_Bombero = $_POST['ID_Bombero'];
    if (!is_numeric($ID_Bombero) || $ID_Bombero <= 0) {
        echo "El ID del bombero debe ser un numero valido.";
        exit;
    }
    $sql = "DELETE FROM bomberos WHERE ID_Bombero = $ID_Bombero";

    if ($conn->query($sql) === TRUE) {
        echo "Bombero eliminado correctamente.";
    } else {
        echo "Error al eliminar bombero: " . $conn->error;
    }
} else {
    echo "No se recibió el ID del Bombero.";
}
$conn->close();
?>
