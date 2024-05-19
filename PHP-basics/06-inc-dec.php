<?php include 'includes/header.php';


$numero1 = 30;
echo ++$numero1; //incremento: (31) al ponerlo al inicio lo añade a la impresión
                echo "<br>";           
$numero2 = 30;
echo $numero2--; //decremento: (30) al ponerlo al final no lo añade a la impresión
                echo "<br>";        
echo $numero2; //(29) ahora sí imprime el decremento
                echo "<br>";   
$numero1 += 5; 
echo $numero1; //(36) incrementa la cantidad que queremos


include 'includes/footer.php';