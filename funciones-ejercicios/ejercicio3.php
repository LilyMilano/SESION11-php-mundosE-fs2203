<?php
/**
Muestra los números pares del 1 al 20 en una sola línea.
 */


//** Como array: function.array-filter.php

function par($var)
{   return ($var%2==0); //* Retorna siempre que el número entero sea par
}

$numeros_pares=range(1,20,1);

echo "Par: ";
print_r (array_filter($numeros_pares, "par")); 

//______________________________________________________________________________

//** Como Ciclo Foreach:    

foreach ($numeros_pares as $par) {
    if($par%2==0 && $par<=20) {
        echo "$par ";
    }
}

?>