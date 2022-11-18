<?php
/**
Una web de servicios tiene un problema, quiere que indiquemos en su página de
inicio el día de la semana, tarea sencilla de no ser por que el servidor nos
proporciona el día en inglés mediante la función date().
a. Ayuda del ejercicio:
i. La función date() con el parámetro 'D' nos devuelve las tres primeras
letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat,
Sun.
ii. Con este pequeño código $dia_ingles = date('D'); tendremos el día en
la variable $dia_ingles.
iii. Mostrar el día en español por pantalla con el mensaje: "El día de la
semana es: XXXX".
*/

//$dia_ingles= date('D');
//echo $dia_ingles;

$dias_espaniol=array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes","Sabado");

echo "El día de la semana es: ".$dias_espaniol[date("w")-1].".";

//* "w": representación numérica del día de la semana. 0 (for Sunday) through 6 (for Saturday)
//* [date("w")-1]: Representa el índice numérico, que permite recuperar del array 
//* el valor string del día actual.

//?@link https://php.net/manual/en/function.date.php

?>