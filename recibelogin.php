<?php
if(!isset($_POST["correo"]) || !isset($_POST["contrasena"])) exit();

include_once "conexion.php";

$email = $_POST["correo"];
$pass = $_POST["contrasena"];

$sentencia = $base_de_datos->prepare("SELECT * FROM usuarios WHERE correo_usuario = '$email' AND contrasena_usuario = '$pass';");
$sentencia->execute();
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);

echo $usuario->id_usuario;

if($usuario->id_usuario !== "" ){
      session_start();
    if (!isset($_SESSION['idUsuario'])) {
        $_SESSION['idUsuario'] = $usuario->id_usuario;
        $_SESSION['email'] = $usuario->correo_usuario;
        $_SESSION['nombre'] = $usuario->nombre_usuario;
        $_SESSION['apellido'] = $usuario->apellido_usuario;
        $_SESSION['password'] = $usuario->contrasena_usuario;
    }
    header('location: musicahome.php');
}else {
  echo "Algo salió mal. Por favor verifica que la password y contraseña";
}
?>
