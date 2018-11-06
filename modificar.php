<?php

if(!isset($_POST["idUsuario"]) ||!isset($_POST["nombre_usuario"]) || !isset($_POST["apellido_usuario"]) || !isset($_POST["correo_usuario"])) ;


session_start();
include_once "conexion.php";


$id = $_SESSION['idUsuario'];
$nombre = $_POST["nombre_usuario"];
$apellido = $_POST["apellido_usuario"];
$correo = $_POST["correo_usuario"];

								$sentencia = $base_de_datos->prepare("UPDATE usuarios SET  nombre_usuario = ?, apellido_usuario=?,correo_usuario = ? WHERE id_usuario = ?;");
								$resultado = $sentencia->execute([$nombre,$apellido,$correo, $id]);


                if($resultado === TRUE) header('location: musicahome.php');
                else echo "Algo salió mal. Por favor, verifica que la tabla exista"


?>
