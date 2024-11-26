<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Cuartel</title>
    <link rel="stylesheet" href="stylecuarteles.css">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="logo1.png" alt="Logo" class="logo">
        </div>
        <div class="form-container">
            <input type="text" id="personId" placeholder="Ingrese el ID">
            <button onclick="toggleCard()">Buscar</button>
        </div>
    </header>
    <footer class="footer">
        <div class="info">
            <div>Cuartel 4ª Cuerpo de Bomberos de Rancagua</div>
            <div id="clock"></div>
            <div><a href="login.php">Salir</a></div>
            <div><a href="prueba1.php">Salir</a></div>
        </div>
    </footer>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();

            document.getElementById('clock').innerHTML = 
                `${hours}:${minutes}:${seconds}<br>${day}/${month}/${year}`;
        }

        setInterval(updateClock, 1000);
        updateClock();

        function toggleCard() {
            const id = document.getElementById('personId').value.trim();
            const card = document.getElementById('card' + id);
            if (card) {
                document.querySelectorAll('.card').forEach(c => c.classList.remove('active'));
                card.classList.add('active');
            } else {
                document.querySelectorAll('.card').forEach(c => c.classList.remove('active'));
            }
        }
    </script>
</body>
</html>
