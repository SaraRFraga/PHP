<?php include 'includes/header.php';

//las variables en PHP comienzan con $ y no pueden comenzar con números
$nombre = "Sara";
// $_nombre = "Sara"
// $nombre_ = "Sara"


echo $nombre;//echo imprime el valor
var_dump($nombre);//imprime más información

define('constante', "Este es el valor de la cosntante");
echo constante;

const constante2 = "Hola 2";//esta sintaxis no es tan común como la anterior
echo constante2;

$nombreCliente = "Sara";
$nombre_cliente = "Sara";


include 'includes/footer.php';