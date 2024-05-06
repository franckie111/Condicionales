<?php   
echo "Digite un numero: ";
$numero1 = intval(fgets(STDIN));

echo "Digite otro numero: ";
$numero2 = intval(fgets(STDIN));

if ($numero1 > $numero2)
    echo "$numero1 es mayor que $numero2";
else
    echo "$numero2 es mayor" ;
