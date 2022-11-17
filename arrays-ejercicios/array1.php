<?php
/**
Definir un array con los días de la semana y recorrer imprimiendo cada uno de los
días con la posición o índice que corresponde.
a. Ejemplo de impresión: “EL valor de la posición [0] es [Lunes]
b. Recordar que para recorrer un array tenemos el for y foreach y echo para mostrar el elemento
*/

$dias=["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes","Sabado"];

print_r($dias);  //*echo $dias[0]."<br>";

// _________________________________________________

for($indice=0;$indice < count($dias); $indice++) {  //*Con Ciclo For
    echo "El valor de la posición [$indice] es [$dias[$indice]] <br>";
}
//*echo $dias[$indice]. "<br>";
//*count:Counts all elements in an array, or something in an object.
// _________________________________________________

foreach ($dias as $indice=>$dia){  //*Con Ciclo Foreach
    echo "El valor de la posición [$indice] es [$dia] <br>";
}
?>