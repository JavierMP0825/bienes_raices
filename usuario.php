<?php
//importar conexion
require 'includes/config/database.php';
$db = conectarBD();
//crear email
$email = "correo@correo.com";
//crear password
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios (email, password) VALUES('{$email}', '{$passwordHash}') ";

echo $query;

mysqli_query($db, $query);

?>