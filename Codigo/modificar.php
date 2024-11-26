<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link rel="stylesheet" href="styleadmin.css">
    <?php
    include 'bd.php';
    session_start();
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
    <form action="modificarusuario.php" method="post">
        <div class="form-group">
            <label for="id_bombero">ID Bombero:</label>
            <input type="text" id="id_bombero" name="id_bombero" required>
        </div>
        
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        
        
        <div class="form-group">
                <label for="id_cuartel">ID Cuartel:</label>
                <select id="id_cuartel" name="id_cuartel">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
        </div>
        
        <div class="form-group">
            <label for="id_cuartel">ID Cuartel:</label>
            <input type="text" id="id_cuartel" name="id_cuartel" required>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Modificar Datos" class="button">
        </div>
    </form>
    </div>
</body>
</html>
