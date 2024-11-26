<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
    <?php
include 'bd.php';
?>
</head>
<body>
<?php
        $message = '';
        $users = [
            'operador391' => ['password' => 'operador391', 'redirect' => 'Operador.php'],
            'cbrgua4ta' => ['password' => 'cbrgua4ta', 'redirect' => 'cuartel4ta.php'],
            'ADMIN' => ['password' => 'ADMIN', 'redirect' => 'admin.php'],
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['loginUsername'];
            $password = $_POST['loginPassword'];
            if (isset($users[$username]) && $users[$username]['password'] === $password) {
                $redirectPage = $users[$username]['redirect'];
                header("Location: $redirectPage");
                exit();
            } else {
                $message = 'Nombre de usuario o contraseña incorrectos.';
            }
        }
        ?>
    <div class="container"> 
        <h2>Inicio de Sesión</h2>
        <form id="loginForm" action="#" method="post">
            <div class="form-group">
                <label for="loginUsername">Nombre de usuario:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Contraseña:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
            </div>
            <div class="form-group">
                <button type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
