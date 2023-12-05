<?php

$numero = $_POST["numero"];

echo "El <b>numero</b> elegido es $numero <br/>";

$suma=0;
for ($i=1; $i<=$numero;$i++) {
    $suma=$suma+$i;
}

echo "La suma acumulativa de $numero, es $suma";


?>