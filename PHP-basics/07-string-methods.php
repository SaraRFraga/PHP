<?php include 'includes/header.php';

$nombreCliente = "      Sara        ";

// Conocer extensión de un string: muy útil para formularios para comprovar que no van vacíos 
echo strlen($nombreCliente); //(18)
var_dump($nombreCliente);  //(18)
                                            echo "<br>";
// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto); //(4)                 
                                            echo "<br>";
// Convertirlo a mayúsculas
echo strtoupper($nombreCliente);            echo "<br>";

// Convertirlo a minúsculas
echo strtolower($nombreCliente);            echo "<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2)); //compara los email pasándolos previamente a mayúsculas
                    echo "<br>";
echo str_replace('Sara', 'S', $nombreCliente);  echo "<br>";
                    
// Revisar si un string existe o no
echo strpos($nombreCliente, 'Sara');            echo "<br>";
$tipoCliente = "Premium";                       echo "<br>";
                    

//Concatenar distintas variables a strings
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

echo "<br>El Cliente {$nombreCliente} es {$tipoCliente} ";

include 'includes/footer.php';