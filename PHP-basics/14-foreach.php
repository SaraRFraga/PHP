<?php include 'includes/header.php';

$productos = [ //cada producto es un arreglo asociativo
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

foreach( $productos as $producto) { ?> <!-- aquí se cierra PHP y el siguiente código lo carga el navegador, no el servidor -->
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo $producto['precio'] . "€"; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible';  ?> </p> <!-- operador ternario para ejecutar si true oo false -->
    </li>
    <?php
}



include 'includes/footer.php';