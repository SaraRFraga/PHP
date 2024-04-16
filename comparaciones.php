<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3); //true pues numero2 y numero3 son iguales
echo "<br>";

var_dump($numero2 == $numero4); //true aunque numero2 es int y numero4 string
echo "<br>";

var_dump($numero2 === $numero4); //false pues este operador es estricto y revisa tanto el valor como el tipo de dato
echo "<br>";

// -1 Si Izquierda es menor, 0 Si es igual, 1 Si izquierda es mayor
var_dump($numero1 <=> $numero2); //-1
echo "<br>";

var_dump($numero2 <=> $numero1); //1
echo "<br>";

var_dump($numero2 <=> $numero3); //0
echo "<br>";


include 'includes/footer.php';