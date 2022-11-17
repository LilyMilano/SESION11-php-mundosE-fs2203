<?php

/**
Debemos realizar un script que diga si una palabra es palíndroma, es decir, que es igual leerla de principio a fin que
dé fin a principio. Para lograr darle la vuelta haremos uso de la función de php strrev().
*/

$palabra="reconocer";

if($palabra === strrev($palabra)){
        echo "La palabra $palabra es un palíndromo";

}else {
        echo "La palabra $palabra no es un palíndromo";
}
?>