<?php

session_start();

if (isset($_SESSION['idUsuario'])) {

session_destroy();

header('location: index.html');

}

?>
