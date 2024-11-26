<?php
include 'bd.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "UPDATE bomberos SET
        nombre = ?,
        telefono = ?,
        operatividad = ?,
        id_cuartel = ?,
        radio_acargo = ?
        WHERE id_bombero = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $nombre, $telefono, $operatividad, $id_cuartel, $radio_acargo, $id_bombero);

$id_bombero = $_POST['id_bombero'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$operatividad = $_POST['operatividad'];
$id_cuartel = $_POST['id_cuartel'];
$radio_acargo = $_POST['radio_acargo'];

$stmt->execute();

echo "Datos del bombero actualizados correctamente.";

$stmt->close();
$conn->close();
?>
