<?php
session_start();
include_once("conexion.php");

$conexion = new Conexion();
$db = $conexion->getConexion();

if (isset($_GET['btn'])) {
    $tipoDocumento = $_GET['tipoDocumento'];
    $numeroDocumento = $_GET['numeroDocumento'];
    $fechaNacimiento = $_GET['fechaNacimiento'];

    // Validar entradas
    $errors = [];

    // Verificar que el tipo de documento sea un valor válido 
    if (empty($tipoDocumento)) {
        $errors[] = "Por favor, seleccione un tipo de documento.";
    }

    // Verifica que el número de documento contenga solo dígitos
    if (!preg_match('/^\d+$/', $numeroDocumento)) {
        $errors[] = "Número de documento debe ser solo dígitos.";
    }

    // Verifica que la fecha de nacimiento tenga un formato válido (YYYY-MM-DD)
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fechaNacimiento)) {
        $errors[] = "Fecha de nacimiento debe estar en formato YYYY-MM-DD.";
    }

    // Si hay errores, se muestra y no ejecuta la consulta
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit; // Termina el script para evitar el envío
    }

    try {
        // Preparar la consulta SQL
        $query = "SELECT * FROM public.gen_m_persona WHERE id_tipoid = :tipoDocumento AND numeroid = :numeroDocumento AND fechanac = :fechaNacimiento";
        
        // Preparar la sentencia
        $stmt = $db->prepare($query);

        // Vincular los parámetros a los valores ingresados por el usuario
        $stmt->bindParam(':tipoDocumento', $tipoDocumento);
        $stmt->bindParam(':numeroDocumento', $numeroDocumento);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);

        // Ejecutar la consulta
        $stmt->execute();

        // Verificar si se encontró una coincidencia
        if ($stmt->rowCount() > 0) {
            // Obtener el usuario
            $user = $stmt->fetch(PDO::FETCH_ASSOC); // Obtiene el primer resultado como un array asociativo

            // Almacenar el ID del usuario en la sesión
            $_SESSION['user_id'] = $user['id']; // Asegúrate de que 'id' es el nombre correcto de la columna

            // Redirigir a otra página si los datos son correctos
            header("Location: homeprueba.php"); 
            exit; // Asegúrate de llamar a exit después de header
        } else {
            echo "Validación fallida. Los datos no coinciden con ningún registro.";
        }
    } catch (PDOException $e) {
        echo "Error en la validación: " . $e->getMessage();
    }
}
?>

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
