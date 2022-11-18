<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>

<body>
    <form action="ejercicio5.php" method="post">

        <label for="carrito">Carrito de Compras:</label>
        <input type="text" name="carrito" id="carrito"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>

</html>

<?php

/**
Una tienda quiere realizar una mejora en el código de su web. Necesita que la web,
según el importe del carrito, muestre un mensaje u otro al usuario. En concreto
quiere que:
a. Si la compra es inferior a 30 pesos se le muestra un mensaje en negrita
diciendo: 'Compra más o te cobraremos el gasto de envío que es igual al
valor de compra'.
b. Si la compra es superior a 30 pesos pero inferior a 90 deberemos mostrar un
número indicando cuánto le falta para llegar a 90 pesos y tener gastos de
envío gratuitos. Ejemplo: '¡¡¡Con solo 33 pesos más podrás tener gastos de
envío gratis!!!'
c. Si la compra alcanza los 90 pesos indicaremos un mensaje en negrita:
'Gastos de envío incluidos ¡Vuelve pronto!'.
d. AYUDA: Para este problema disponemos de los siguientes datos:
i. El importe total del carrito de compra viene en una variable
$total_compra con un número decimal positivo. Ejemplo: 33.55.
ii. Los mensajes en negrita deben utilizar la etiqueta <strong><\strong>
*/

if($_POST){
    
    $total_compra=round($_POST['carrito'],1);

switch ($total_compra) {
    
    case ($total_compra<30):
        echo "<strong> Compra más o te cobraremos el gasto de envío que es igual al
        valor de compra </strong>";
        break;
    case ($total_compra>=30 && $total_compra<90):
        $resta=90-$total_compra;
        echo "¡¡¡Con solo $resta pesos más podrás tener gastos de
        envío gratis!!!";
        break;
    case ($total_compra>=90):
        echo "<strong> Gastos de envío incluidos ¡Vuelve pronto! </strong>";
        break;

    }
}
//* round(): Returns the rounded value of val to specified precision (number of 
//*digits after the decimal point)
?>