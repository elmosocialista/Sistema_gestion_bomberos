<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$database = "bomberos_trabajo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $personId = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM bomberos WHERE id = '$ID_Bombero'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode(["error" => "ID no proporcionado"]);
}

$conn->close();
?>
