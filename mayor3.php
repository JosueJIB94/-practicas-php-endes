<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

if ($numero1 > $numero2 && $numero1 > $numero3) {

    echo "El numero mayor es $numero1";
    
} elseif ($numero2 > $numero3) { 
    echo "El numero mayor es $numero2";
} else {
    echo "El numero mayor es $numero3";
}

} else {

    echo "Acceso no permitido.";
}

?>