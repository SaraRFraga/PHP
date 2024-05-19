<?php include 'includes/header.php';
//LOOPS: perfectos para recorrer los resultados de un BBDD
                         
// While: se ejecuta hasta que la condición sea falsa, hasta el 9
$i = 0; // Inicializador

while($i < 10) { //si no es menor a 10 no se imprime nada


    echo $i . "<br>"; //se cumple la condición, va a imprimir los incrementos desde 0
    
    $i++; // Incremento
}

echo "<br>";

// Do While: primero ejecuta el código y después lo evalúa
$i = 10; 

do {
    echo $i . "<br>"; //imprime 10 y si fuera menor aplicaría el incremento

    $i++;
} while($i < 10);

echo "<br>";

// For Loop: se ejecuta hasta que una condición se evalúe como false
for($i = 0; $i < 10; $i++ ) { //(inicializador, condición, incremento)
    echo $i . "<br/>"; 
}

/** ejercicio entrevistas de multiplos de 3 y 5
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

 for($i = 1; $i < 100; $i++ ){
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - FIZZ BUZZ <br/>";
    } elseif($i % 3 === 0) {
        echo $i . " - Fizz <br/>";
    } elseif($i % 5 === 0 ) {
        echo $i . " - Buzz <br/>";
    } else {
        echo $i . "<br/>";
    }
}

//Mismo ejemplo sin {} ponemos : y endforeach endif endof
// for($i = 1; $i < 100; $i++ ):
//     if($i % 3 === 0 && $i % 5 === 0):
//         echo $i . " - FIZZ BUZZ <br/>";
//     elseif($i % 3 === 0):
//         echo $i . " - Fizz <br/>";
//     elseif($i % 5 === 0 ):
//         echo $i . " - Buzz <br/>";
//     else:
//         echo $i . "<br/>";
//     endif;
// endfor;


// For Each: útil para recorrer arreglos
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ): 
    echo $cliente . '<br/>'; //va listando los clientes sin tener que contarlos e indicarle su posición como con for
endforeach;

// for($i = 0; $i < count($clientes); $i++) { //hace lo mismo que el anterior pero con mas código
//     echo $clientes[$i] . '<br/>';
// }

$cliente = [ //Arreglo asociativo, se parece a un objeto de JS
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;


include 'includes/footer.php';