<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];

echo "Hola $nombre $apellido1 $apellido2";

} else {

    echo "Acceso no permitido.";
}

?>

