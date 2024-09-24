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
</head>
<body>
<div class="container">

    <nav>
        <a href="home.php"> <img src="img/hogar.png" alt="">Home</a>
        <a href="perfil.php"><img src="img/perfil.png" alt="">Perfil de Usuario</a>
    </nav>

    <div class="header">
        <img src="img/R-FAST-PNG-05.png" alt="Logo">
        <h1>Pag. 1</h1>
        <button onclick="redirigir()">Cerrar Sesión</button>
    </div>
    <main class="content">
    <div class="patient-info">
        <div class="info">
            <p><strong>Paciente:</strong> XXXXXXXXX</p>
            <p><strong>Identificación:</strong> XXXXXXXXX</p>
            <p><strong>Sexo/Edad:</strong> XXXXXXXXX</p>
            <p><strong>Administrador de salud:</strong> XXXXXXXXX</p>
        </div>
        <div class="info">
            <p><strong>Teléfono:</strong> XXXXXXXXX</p>
            <p><strong>Médico:</strong> XXXXXXXXX</p>
            <p><strong>Fecha orden:</strong> XXXXXXXXX</p>
        </div>
    </div>

    <div class="test-group">
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
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                </tr>
                <tr>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                </tr>
                <tr>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                </tr>
                <tr>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                </tr>
                <tr>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                    <td>XXXXXXXXXXX</td>
                </tr>
            </tbody>
            <div class="firma">
            XXXXXXXXXXX
            </div>
        </table>
    </div>
    </main>
</div>
</body>
</html>