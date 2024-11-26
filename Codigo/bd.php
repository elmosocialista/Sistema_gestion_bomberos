<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bomberos_trabajo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
 $_SESSION['message'] = "Conexión exitosa";
?>