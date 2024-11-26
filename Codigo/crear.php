<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleadmin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <h2>Agregar Voluntario</h2>
        <form action="agregarvoluntario.php" method="post">
            <div class="form-group">
                <label for="id_bombero">ID Bombero:</label>
                <input type="text" id="id_bombero" name="id_bombero"required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono"required>
            </div>
           
            <script>
            $(document).ready(function(){
            var date = new Date();
            var day = ("0" + date.getDate()).slice(-2);
            var month = ("0" + (date.getMonth() + 1)).slice(-2);
            var today = date.getFullYear() + "-" + (month) + "-" + (day);
            $('#dateid').val(today);
            });
            </script>

            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso (dd-mm-aaaa):</label>
                <input type="date" class="fecha_ingreso" readonly id="dateid" name="fecha_ingreso"required>
            </div>
            <div class="form-group">
                <label for="operatividad">Operatividad:</label>
                <input type="text"  id="operatividad" name="operatividad"required>
            </div>
            <div class="form-group">
                <label for="id_cuartel">ID Cuartel:</label>
                <select id="id_cuartel" name="id_cuartel"required>
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
                <label for="radio_acargo">Radio a Cargo:</label>
                <input type="text" id="radio_acargo" name="radio_acargo"required>
            </div>
            <button type="submit" class="button">Agregar Voluntario</button>
        </form>
    </div>
</body>
</html>