
<?php
if(!isset($_POST["nombre_usuario"]) || !isset($_POST["apellido_usuario"]) || !isset($_POST["correo_usuario"]) || !isset($_POST["contrasena_usuario"])) exit();

include_once "conexion.php";
$nombre = $_POST["nombre_usuario"];
$apellido = $_POST["apellido_usuario"];
$correo = $_POST["correo_usuario"];
$contraseña = $_POST["contrasena_usuario"];

$sentencia = $base_de_datos->prepare("INSERT INTO usuarios(nombre_usuario, apellido_usuario, correo_usuario, contrasena_usuario) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $apellido, $correo, $contraseña]);

if($resultado === TRUE) header('location: login.html');
else echo "Algo salió mal. Por favor, verifica que la tabla exista"
 ?>
