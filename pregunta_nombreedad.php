<?php

echo '¿Cuál es su nombre? '; 
 
$nombre = fgets(STDIN);

echo '¿Cuál es su edad? ';
$edad = intval(fgets(STDIN));

if ($edad >= 18 && $edad <= 99) {
    echo "Hola $nombre, usted es mayor de edad.";
} else if ( $edad >=100|| $edad <= 0) {
    echo "Por favor, ingrese una edad válida.";
} else {
    echo "Hola $nombre, usted es menor de edad.";
}

