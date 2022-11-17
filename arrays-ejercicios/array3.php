<?php
/**
Definir un array con los números enteros del 1 al 20, recorrer el array y mostrar los
números que sean múltiplos de 2 y de 5.
a. Recordar que para recorrer un array tenemos el for y foreach y echo para
mostrar el elemento. 
 */

$numeros=range(1,20,1);

foreach($numeros as $numero){
    if($numero%2 ==0){   
    echo "$numero es múltiplo de 2 <br>";
    }

    if($numero%5 ==0){
        echo "$numero es múltiplo de 5 <br>";
    }
}


?>