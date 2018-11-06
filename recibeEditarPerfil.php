<?php

if(!isset($_POST["id_usuario"]) ||!isset($_POST["nombre_usuario"]) || !isset($_POST["apellido_usuario"]) || !isset($_POST["correo_usuario"])|| !isset($_POST["foto"])) exit();


session_start();
include_once "conexion.php";


$id = $_SESSION['id_usuario'];
$nombre = $_POST["nombre_usuario"];
$apellido = $_POST["apellido_usuario"];
$correo = $_POST["correo_usuario"];

	if(!empty($_FILES["foto"]["type"])){
        $fileName = time().'_'.$_FILES['foto']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["foto"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["foto"]["type"] == "image/png") || ($_FILES["foto"]["type"] == "image/jpg") || ($_FILES["foto"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['foto']['tmp_name'];
            $targetPath = "imagenes/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;

								$sentencia = $base_de_datos->prepare("UPDATE usuarios SET  nombre_usuario = ?, apellido_usuario=?,correo_usuario = ?, foto = ? WHERE id_usuario = ?;");
								$resultado = $sentencia->execute([ $id, $nombre,$apellido,$correo , $fileName]);


						if($resultado === TRUE) echo "ok";
						else "Algo salió mal. Por favor verifica que la tabla exista";
		            }
		        }
    }else{

			$sentencia = $base_de_datos->prepare("UPDATE usuarios SET  nombre_usuario = ?, apellido_usuario=?,correo_usuario = ?, foto = ? WHERE id_usuario = ?;");
			$resultado = $sentencia->execute([$id, $nombre,$correo ]);


		if($resultado === TRUE) echo "ok";
		else "Algo salió mal. Por favor verifica que la tabla exista";
}

?>
