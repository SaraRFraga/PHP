<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin ) { //or || va a revisar que una de las dos condiciones sea true
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado";
}

if($autenticado && $admin ) { //and && va a revisar que las dos condiciones sean true
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado";
}

// If anidado: un if dentro de otro if
$cliente = [
    'nombre' => 'Sara',
    'saldo' => 150,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";

if( !empty($cliente) ) { //si el arreglo de cliente NO está vacío
    echo "El Arreglo de acliente no esta vacío";

    if($cliente['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";


// else if: revisar por más de una condición
if($cliente['saldo'] > 0 ) {
    echo "El Cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El Cliente es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es Premium";
}

echo "<br>";


// switch
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP es un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, es JavaScript";
        break;
    case 'HTML':
        echo 'Es HTML';
        break;
    default:
        echo "Algún lenguaje pero no sé su nombre";
        break;
}


include 'includes/footer.php';