<?php
        if (isset($_POST['btn'])) {
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&display=swap');
    </style>
</head>
<body>
<div class="container">

<!-- Navegación -->
<nav>
    <a href="home.php"> <img src="img/hogar.png" alt="">Home</a>
    <a href="perfil.php"><img src="img/perfil.png" alt="">Perfil de Usuario</a>
</nav>

<!-- Encabezado con logo, nombre del paciente y botón de cerrar sesión -->
<div class="header">
    <img src="img/R-FAST-PNG-05.png" alt="Logo">
    <h1>Nombre del Paciente</h1>
    <button onclick="redirigir()">Cerrar Sesión</button>
</div>

<!-- Contenido principal -->
<div class="content">
    <h2>Ordenes de Laboratorio</h2>
    <div class="filtro">
      <div class="numero">
        <label for="NumeroOrden">Numero de orden</label>
        <input type="text" name="" id="">
      </div>
      <div class="fecha">
        <label for="RangoFecha">Rango de Fecha</label>
        <input type="date" name="fechaInicio" id="fechaInicio">
        <input type="date" name="fechaFin" id="fechaFin">
      </div>
    </div>
    <div class="orden">
      <table>
        <thead>
            <tr>
                <th>Fecha de la orden</th>
                <th>Documento de la orden</th>
                <th>Número de la orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
            <tr>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <td>XXXXXXXXXXXX</td>
                <form action="orden.php" method="POST">
                    <td class="actions"><button name="ver">Ver</button></td>
                </form>
                
            </tr>
        </tbody>
    </table>

    <!-- Paginación -->
    <div class="pagination">
        <button id="prevPage">&lt;</button>
        <input type="text" id="numeroPagina" pattern="[0-9]+" value="1" min="1">
        <button id="nextPage">&gt;</button>
    </div>
</div>
    </div>
</div>

</div>
    <script src="home.js"></script>
</body>
</html>


    
           
                
           
            
                
           
