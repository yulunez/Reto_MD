// Función para agregar una nueva fila a la tabla de órdenes
function addOrder() {
    var table = document.getElementById("orderTable");
    var row = table.insertRow(-1);

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);

    cell1.textContent = "XXXXXXXXXX";
    cell2.textContent = "";
    cell3.textContent = "XXXXXXXXXX";
    cell4.textContent = "XXXXXXXXXX";
    cell5.textContent = "XXXXXXXXXX";
    cell6.innerHTML = '<button class="btn btn-danger" onclick="deleteOrder(this)">Eliminar</button>';
  }

  // Función para eliminar una fila de la tabla de órdenes
  function deleteOrder(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }
