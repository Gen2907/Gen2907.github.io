<?php
// Conecta con la base de datos
include("conexion.php");

// Ejecuta una consulta para obtener todos los usuarios
$resultado = $conexion->query("SELECT * FROM usuarios");

// Título de la página
echo "<h1>Usuarios Registrados</h1>";

// Crea la tabla donde se mostrarán los usuarios
echo "<table border='1' cellpadding='10'>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
        </tr>";

// Recorre cada usuario encontrado y los muestra en la tabla
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $fila['id'] . "</td>
            <td>" . $fila['username'] . "</td>
            <td>" . $fila['email'] . "</td>
          </tr>";
}

// Cierra la tabla
echo "</table>";
?>
