<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - Revisa si un arreglo está vacío
var_dump( empty($clientes) ); //true: el arreglo está vacío
var_dump( empty($clientes2) ); //true: el arreglo está vacío
var_dump( empty($clientes3) ); //false: el arreglo tiene información


// Isset - Revisa si un arreglo está creado o una propiedad está definida
echo "<br>";
var_dump( isset($cliente4) ); //false: el arreglo no existe
var_dump( isset($clientes) ); //true: el arreglo existe
var_dump( isset($clientes2) ); //true: el arreglo existe
var_dump( isset($clientes3) ); //true: el arreglo existe 

// Isset - Permite revisar si una propiedad de un arreglo asociativo existe
var_dump( isset($clientes['nombre']) ); //true: la propiedad nombre existe
var_dump( isset($clientes['codigo']) ); //false: la propiedad codigo no existe


include 'includes/footer.php';