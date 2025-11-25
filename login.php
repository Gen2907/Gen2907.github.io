<?php
session_start();
include("conexion.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username='$username'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    
    $usuario = $resultado->fetch_assoc();

    if (password_verify($password, $usuario['password'])) {
        
        // Guardamos sesión
        $_SESSION['usuario'] = $usuario['username'];

        // Redirigimos a la página principal
        echo "<script>
                alert('Inicio de sesión exitoso.');
                window.location.href = 'index.html';
              </script>";
        exit;

    } else {
        echo "<script>
                alert('Contraseña incorrecta.');
                window.location.href = 'login.html';
              </script>";
        exit;
    }

} else {
    echo "<script>
            alert('Usuario no encontrado.');
            window.location.href = 'login.html';
          </script>";
    exit;
}
?>
