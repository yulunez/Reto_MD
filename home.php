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
</head>
<body>
<div class="container">
    <header>
      <div class="user-info">
        <h2>Nombre Paciente</h2>
        <button id="logout-btn">Cerrar sesión</button>
      </div>
</header>

    <main>
      <h3>Órdenes de laboratorio</h3>
     
      <div class="search-filters">
        <input type="text" id="orderNumber" placeholder="Número de orden">
        <input type="date" id="startDate">
        <input type="date" id="endDate">
        <button id="searchBtn">Buscar</button>
      </div>


      <table id="ordersTable">
        <thead>
          <tr>
            <th></th>
            <th>Fecha de la orden</th>
            <th>Documento de la orden</th>
            <th>Número de la orden</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="ordersBody">
          <!-- Aquí se insertarán las filas con JavaScript -->
        </tbody>
      </table>


      <div class="pagination">
        <button id="prevPage">◄</button>
        <span>Página <span id="pageNumber">1</span></span>
        <button id="nextPage">►</button>
      </div>
    </main>
  </div>
    <script src="home.js"></script>
</body>
</html>