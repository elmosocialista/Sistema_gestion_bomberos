<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecuartel4.css">
    <title>Vista Cuartel</title>
</head>
<?php
  include 'bd.php';
  ?>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="logo1.png" alt="Logo del Cuartel" class="logo">
            <div class="cuartel-info">
                <span>Cuartel 4ª</span>
            </div>
        </div>
        <div class="form-container">
            <input type="text" id="ID_Bombero" placeholder="Ingrese el ID">
            <button onclick="toggleCard()">Buscar</button>
        </div>
        <div class="status">
            <div class="status-item">Q-4</div>
            <div class="status-item">RX-4</div>
            <div class="status-item">M-4</div>
        </div>
        <div class="info">
            <div id="clock"></div>
        </div>
    </header>

    <main>
        
        <section class="cards-grid">
            <!-- Las tarjetas se insertarán aquí con JavaScript -->
        </section>

        <section class="bottom-section">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52823.790109790556!2d-70.73869914999999!3d-34.15946749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96634367bdef13d3%3A0xd973fc8366ad54f7!2sRancagua%2C%20O'Higgins!5e0!3m2!1ses!2scl!4v1719391345191!5m2!1ses!2scl"
                    width="550" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="novedades">
                <h2>Novedades</h2>
                <div class="novedad-item">
                    <span>Novedad 1</span>
                    <span>Descripción 1</span>
                </div>
                <div class="novedad-item">
                    <span>Novedad 2</span>
                    <span>Descripción 2</span>
                </div>
                <div class="novedad-item">
                    <span>Novedad 3</span>
                    <span>Descripción 3</span>
                </div>
            </div>
        </section>
    </main>

    <script>
async function toggleCard() {
    const personId = document.getElementById('personId').value;

    if (personId) {
        try {
            const response = await fetch(buscarcuart.php?id=${personId});
            const data = await response.json();

            // Limpiar las tarjetas anteriores
            const cardsGrid = document.querySelector('.cards-grid');
            cardsGrid.innerHTML = '';

            // Verificar si hay resultados
            if (data.length > 0) {
                // Crear una tarjeta para cada resultado
                data.forEach(item => {
                    const card = document.createElement('div');
                    card.className = 'card';

                    card.innerHTML = 
                        <p>ID: ${item.ID_Bombero}</p>
                        <p>Nombre: ${item.Nombre}</p>
                        <p>Descripción: ${item.Operatividad}</p>
                    ;
                    cardsGrid.appendChild(card);
                });
            } else {
                cardsGrid.innerHTML = '<p>No se encontraron resultados.</p>';
            }
        } catch (error) {
            console.error('Error al buscar el ID:', error);
        }
    } else {
        alert('Por favor, ingrese un ID.');
    }
}
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
    </script>
</body>
</html>
