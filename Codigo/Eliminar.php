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
    <h2>Eliminar Bombero</h2>
    <form action="eliminarusuario.php" method="POST">
        <fieldset>
            <legend>ID del Bombero a Eliminar</legend>
            <label for="ID_Bombero"></label>
            <input type="text" id="ID_Bombero" name="ID_Bombero" required>
            <br><br>
            <input type="submit" value="Eliminar Bombero">
        </fieldset>
    </form>
</body>
</html>