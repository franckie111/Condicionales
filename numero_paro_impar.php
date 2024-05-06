<?php  

echo "Ingrese un número: ";
$numero1 = fgets(STDIN);


$numero1 = trim($numero1);


if (is_numeric($numero1)) {

    if ($numero1 % 2 == 0) {
        echo "El número $numero1 es par.";
    } else {
        echo "El número $numero1 es impar.";
    }
} else {
    echo "Por favor, ingrese un número válido.";
}

?>