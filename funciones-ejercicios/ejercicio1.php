<!-- ////////////////////////////////////////////////////////////////////
                            HTML FORM
////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1.php</title>

</head>

<body>
    <form action="ejercicio1.php" method="get">
        <label for="numero">Introduzca un número</label>
        <input type="number" name="numero" id="numero"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>
</body>

</html>

<!--////////////////////////////////////////////////////////////////////
                            PHP CODE
//////////////////////////////////////////////////////////////////////-->

<?php
/* 

1. Diseñar un programa para imprimir los números impares menores que N.
a. Ingresando N por variable GET.
b. Asumiendo en el código que N=30.*/

if($_GET){
    $numero=($_GET['numero']);
    
    echo "Los números impares menores de ".$numero." son: <br>"; 
    
    $i=0;
    
    while ($i< $numero) {   
    if($i % 2 !=0){
        echo "</br> $i";
    }
    
    $i++;  
}
}   
?>