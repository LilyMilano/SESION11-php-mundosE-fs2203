<?php
/**
Un cliente de un blog tiene un problema: sus lectores pueden dejar comentarios en la web, pero estos deben de ser de menos de 150 caracteres y, a menudo, cuando escriben, suelen pasarse de longitud. Debes programar un pequeño  script ayudándote de la función strlen() que muestre por pantalla un mensaje de 
error si se pasa de largo:
a. La variable $comentario contiene el texto del mensaje.
b. La función strlen() nos devuelve la longitud de un texto:

$caracteres =strlen($comentario);
 */

$comentario="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus, quo eligendi quasi voluptas debitis assumenda natus iure vitae neque possimus suscipit, sunt dignissimos fugiat. Quasi saepe, exercitationem commodi voluptatibus dolores dolorem, ex incidunt, quo odit voluptatem provident. Praesentium nihil sequi accusamus assumenda maiores, eveniet corporis iusto? Eaque, culpa!";

$caracteres=strlen($comentario);

if($caracteres<=150){
    echo "$caracteres caracteres de 150 disponibles =)";
}else if($caracteres>150){
    echo "$caracteres caracteres. Ha excedido los 150 disponibles =/";
}

//*echo strlen($comentario > 150) ? "Este comentario es inválido" : true;

?>