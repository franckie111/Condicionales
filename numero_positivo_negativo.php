<?php 
echo "Digite un numero: ";

$numero1 = intval(fgets(STDIN));

if ($numero1 > 0) {
    echo "Su numero es positivo";
} elseif ($numero1 < 0) {
    echo "Su numero es negativo";
} else {
    echo "Su numero es 0";
}
