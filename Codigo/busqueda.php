
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busqueda</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<a href="Leer.php" class="button">Ir a Leer.php</a>
</body>
</html>
<?php
  include 'bd.php';
  if (isset($_GET['nombre'])) {
      $nombre = $_GET['nombre'];

      $sql = "SELECT * FROM bomberos WHERE Nombre LIKE ?";

      $stmt = $conn->prepare($sql);

      if ($stmt === false) {
          die("Error al preparar la consulta: " . $conn->error);
      }

      $nombre_param = "%$nombre%";
      $stmt->bind_param("s", $nombre_param);

      $stmt->execute();

      $result = $stmt->get_result();

      echo "<h2 class='search-results-title'>Resultados de la búsqueda:</h2>";
      echo "<ul class='search-results-list'>";
      while ($row = $result->fetch_assoc()) {
          echo "<li>ID Bombero: " . htmlspecialchars($row['ID_Bombero']) . ", Nombre: " . htmlspecialchars($row['Nombre']) . ", Teléfono: " . htmlspecialchars($row['Teléfono']) . "</li>";
      }
      echo "</ul>";

      $stmt->close();
      $conn->close();
  } else {
      echo "<p class='error-message'>Ingrese un término de búsqueda válido.</p>";
  }
  ?>