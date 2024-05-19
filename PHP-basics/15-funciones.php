<?php 
declare(strict_types=1); //typado para que remarque los errores a tiempo real sin tener que abrir en servidor
include 'includes/header.php';



function sumar(int $numero1, float $numero2 ) { //se define la función y toma parámetros
    echo $numero1 + $numero2;
}

sumar(10, 5.5); //aquí se llama a la función
echo "<br>";
sumar(numero2: 10.5, numero1: 5); //parámetros nombrados, se pueden poner en cualquier orden

include 'includes/footer.php';