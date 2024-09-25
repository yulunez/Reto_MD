<?php
        if (isset($_POST['ver'])) {
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto_MD</title>
    <link rel="stylesheet" href="orden.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&display=swap');
    </style>
</head>
<body>
<nav>
        <a href="home.php"><img src="img/hogar.png" alt=""> Home</a>
        <a href="perfil.php"><img src="img/perfil.png" alt="">Perfil del usuario</a>
    </nav>

    <div class="main-content">
        <div class="header">
            <h1>Resultados de Laboratorio</h1>
            <button class="logout-btn" onclick="redirigir()">Cerrar sesión</button>
        </div>

        <div class="patient-info">
            <p><strong style="color: darkblue;">Paciente:</strong> XXXXXXXXXXXX</p>
            <p><strong style="color: darkblue;">Identificación:</strong> XXXXXXXXXXXX</p>
            <p><strong style="color: darkblue;">Teléfono:</strong> XXXXXXXXXXXX</p>
            <p><strong style="color: darkblue;">Médico:</strong> XXXXXXXXXXXX</p>
            <p><strong style="color: darkblue;">Servicio:</strong> XXXXXXXXXXXX</p>
            <p><strong style="color: darkblue;">Fecha orden:</strong> XXXXXXXXXXXX</p>
        </div>

        <div class="lab-group">
            <h2>Nombre del grupo (hematología)</h2>
            <h3>Nombre del procedimiento</h3>
            <table>
                <thead>
                    <tr>
                        <th>Código de la prueba</th>
                        <th>Nombre de la prueba</th>
                        <th>Resultado</th>
                        <th>Valores de Referencia</th>
                        <th>Unidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p style="color: rgb(1, 1, 75);">XXXXXXXXXXXXXXXXXXXX</p>
    </div>

    <script src="orden.js"></script>
</body>
</html>

   
    
         

