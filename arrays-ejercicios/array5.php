<?php
/**
Elaborar un programa para imprimir una tabla con los cuadrados y los cubos de los
20 primeros números enteros.
a. Recordar que para recorrer un array tenemos el for y foreach y echo para
mostrar el elemento.
*TODO: solución con ciclo while y código php embebido. Consultar array =)
*/

$num=1;

?>

<!--////////////////////////////////////////////////////////////////////
                    TABLA HTML CON CÓDIGO PHP EMBEBIDO
//////////////////////////////////////////////////////////////////////--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Cuadrados y Cubos</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Cuadrado</th>
                    <th>Cubo</th>
                </tr>
            </thead>
            <tbody>

                <?php while($num>0 && $num<=20) { ?>

                <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo pow($num,2); ?></td>
                    <td><?php echo pow($num,3); ?></td>
                </tr>
                <?php $num++; ?>

                <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>