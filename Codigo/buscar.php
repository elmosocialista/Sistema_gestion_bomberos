<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="stylecentral.css">
</head>
<body>
<div class="sidebar">
<ul>
            <li><a href="buscar.php">Buscar</a></li>
            <li><a href="mapa.php">Mapa</a></li>
            <li><a href="emergencia.php">Números de Emergencia</a></li>
            <li><a href="frecuencia.php">Frecuencias</a></li>
            <li><a href="zello.php">Zello</a></li>
            <li><a href="cuarteles.php">Cuarteles</a></li>
            <li><a href="maquinas.php">Máquinas disponibles</a></li>
            <li><a href="oficiales.php">Números Oficiales</a></li>
            <br><br>
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
</body>
</html>