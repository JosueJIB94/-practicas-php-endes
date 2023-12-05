<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$numero = $_POST["numero"];

for ($i=0; $i<=10;$i++){
    $resultado=$numero*$i;
    echo "$i x $numero = $resultado </br>";
}

} else {

    echo "Acceso no permitido.";
}


?>