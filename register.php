<?php
// Incluye el archivo que contiene la conexión a la base de datos
include("conexion.php");

// Recibe los datos enviados desde un formulario
$username = $_POST['username'];
$email    = $_POST['email'];
// Encripta la contraseña antes de guardarla en la base de datos
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Crea una consulta SQL para insertar un nuevo usuario en la base de datos
$sql = "INSERT INTO usuarios (username, email, password)
        VALUES ('$username', '$email', '$password')";

// Ejecuta la consulta y verifica si se guardó correctamente
if ($conexion->query($sql) === TRUE) {
    // Si todo sale bien, muestra un mensaje y redirige al login
    echo "<script>
            alert('Usuario registrado con éxito.');
            window.location.href = 'login.html';
          </script>";
} else {
    // Si ocurre un error, lo muestra y también redirige al login
    echo "<script>
            alert('Error al registrar: " . $conexion->error . "');
            window.location.href = 'login.html';
          </script>";
}
?>

