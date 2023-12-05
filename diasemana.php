<?php
 
$numero=  $_POST["numero"]; 

if ($numero==1) {
    echo "El dia de la semana es Lunes";
} elseif ($numero==2) {
    echo "El dia de la semana es Martes";
} elseif ($numero==3) {
    echo "El dia de la semana es Miércoles";
} elseif ($numero==4) {
    echo "El dia de la semana es Jueves";
} elseif ($numero==5) {
    echo "El dia de la semana es Viernes";
} elseif ($numero==6) {
    echo "El dia de la semana es Sábado";
} elseif ($numero==7) {
    echo "El dia de la semana es Domingo";
}  else {
    echo "Error, el numero esta fuera del intervalo exigido";
}


?>