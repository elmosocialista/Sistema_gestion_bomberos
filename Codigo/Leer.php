<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleadmin.css">
    <?php
    include 'bd.php';
    ?>
</head>
<body>
<div class="sidebar">
        <ul>
            <li><a href="Admin.php">Inicio</a></li>
            <li><a href="crear.php">Agregar Voluntario</a></li>
            <li><a href="Leer.php">Buscar Voluntario</a></li>
            <li><a href="modificar.php">Modificar Voluntario</a></li>
            <li><a href="Eliminar.php">Eliminar Voluntario</a></li>
            <li><a href="login.php">Salir</a></li>
        </ul>
    </div>
    <div class="container">
    <h2>Buscar Voluntario</h2>
    <form action="busqueda.php" method="get">
        <div class="form-group">
            <label for="nombre">Buscar por Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Ingrese nombre..." >
        </div>

        <div class="form-group">
            <button type="submit">Buscar</button>
        </div>
    </form>
</div>
</body>
</html>