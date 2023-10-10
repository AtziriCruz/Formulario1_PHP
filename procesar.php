<?php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$contra = $_GET['contra'];
$correo = $_GET['correo'];

echo "<h2>Información recibida :)</h2>";
echo "Nombre:".$nombre."<br/>";
echo "Edad:".$edad."<br/>";
echo "Correo:".$correo."<br/>";
echo "Contraseña:".$contra."<br/>";
?>