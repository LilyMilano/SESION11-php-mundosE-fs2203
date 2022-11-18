<?php
/**
Definir un array de números enteros, recorrer el array y realizar la siguientes
operaciones:
a. Si el número es par elevar al cuadrado(Expresión exponencial)
b. Si el número es impar restar el elemento anterior al número impar. por
ejemplo si es el 3, debo hacer la resta de 3 menos 2.
c. Recordar que para recorrer un array tenemos el for y foreach y echo para
mostrar el elemento y pow para hacer la operación exponencial.

 */

$numeros=range(1,30,1);

foreach($numeros as $numero){
    $resultado= $numero%2==0 ? pow($numero,2) : $numero-($numero-1);
    echo "Resultado: $resultado <br>";
}


//TODO: Consultar si '$numero-($numero-1)' corresponde a una función php. 

?>