<?php

/**
Definir un array con los números enteros del 1 al 20, recorrer el array y 
mostrar los números que sean múltiplos de 2.
A los múltiplos de 2 elevarlos al cubo.
a. Recordar que para recorrer un array tenemos el for y foreach y echo para mostrar el elemento.
 */

$numeros=range(1,20,1);  //*range: Crea un array con un rango de elementos (1-20). 

foreach($numeros as $num_par){
    if($num_par%2 ==0){
        
    $cubo=pow($num_par,3);
    
    echo "El número $num_par es par. Su potencia cúbica es $cubo <br>" ;
    }
}
//* echo(imprime strings) / print_r(imprime arrays). Ejemplo: print_r($numeros);
?>