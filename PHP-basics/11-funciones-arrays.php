<!-- Buscar en arreglos y ordenarlos  -->

<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito) ); //in_array busca si Tablet se encuentra en el arreglo
var_dump( in_array('Audifonos', $carrito) );

// Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // ordena por llaves (orden alfabético);
krsort($cliente); // ordena por llaves (orden alfabético, de la Z a la A);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';