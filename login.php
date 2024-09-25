
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto_MD</title>
    <link rel="stylesheet" href="login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&display=swap');
    </style>
</head>
<body>
<!--este div contiene todo el formulario de login-->
<div class="login-container">
    <!--Este es un pequeño mensaje de bienvenida-->
    <h2>Iniciar Sesión</h2>
    <p style="text-align: center;">¡Bienvenido a tu portal medico! <br> Por favor ingresa tus datos
        para conocer los resultados de tus examenes</p>
    <!--el formulario que lleva a la pagina php-->
    <form action="home.php" method="GET" onsubmit="return validateForm()">

        <img src="https://i.gifer.com/YCZH.gif" class="loading" id="loadingImg" alt="Cargando...">


        <label for="tipoDocumento">Tipo de documento:</label>
        <select id="tipoDocumento" name="tipoDocumento" required>
            <option value="">Selecciona...</option>
            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
            <option value="Registro Civil">Registro Civil</option>
            <option value="Pasaporte">Pasaporte</option>
        </select>

        
        <label for="numeroDocumento">Número de documento:</label>
        <input type="text" id="numeroDocumento" name="numeroDocumento" pattern="[0-9]+" required placeholder="Ingresa tu número de documento">

        
        <label for="fechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

        <div class="captcha-container">
            <canvas id="captcha-canvas" width="200" height="50"></canvas>
            <button type="button" onclick="generateCaptcha()">Recargar CAPTCHA</button>
            <input type="text" id="captcha-input" placeholder="Ingrese el código CAPTCHA" required>
        </div>

        <button type="submit" name="btn" class="btn">Ingresar</button>
    </form>
</div>

<div class="img">
    <img src="" alt="">
</div>

<script src="login.js"></script>
</body>
</html>
