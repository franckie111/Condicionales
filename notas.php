<?php   
echo "Digite la primera nota: ";
$numero1 = intval(fgets(STDIN));

echo "Digite la segunda nota: ";
$numero2 = intval(fgets(STDIN));

echo "Digite la tercera nota: ";
$numero3 = intval(fgets(STDIN));

echo "Digite la cuarta nota: ";
$numero4 = intval(fgets(STDIN));

echo "Digite la quinta nota: ";
$numero5 = intval(fgets(STDIN));


$suma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;


$promedio = $suma / 5;

echo "El promedio es: $promedio\n";


if ($promedio >= 0 && $promedio < 2.9) {
    echo "No aprobo";
} elseif ($promedio >= 3.0 && $promedio < 5.0) {
    echo "Aprobo";
}

