<!-- ARREGLOS ASOCIATIVOS: se accede a ellos a través de una propiedad en vez de índice
equivalentes a los objetos en JS -->

<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Sara',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

echo $cliente['nombre']; //accede a la propiedad nombre
echo $cliente['informacion']['disponible']; //primero accedemos al arreglo disponible y despues a la propiedad nombre

$cliente['codigo'] = 1209192012; //PHP incluye esta nueva propiedad dentro del arreglo cliente

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';