<?php

/*
Ejercicio 3:
Crear programa en PHP que compruebe si una variable está vacía
y si está vacía rellenarla con texto en minúscula y mostrarlo
en mayúsculas y en negrita.
*/ 


$texto="";

if(empty($texto)){
    $texto="hola";
   echo strtoupper($texto);
   echo "<br>";
   echo "<strong>".strtoupper($texto)."</strong>";

}else{
    echo "la variable no está vacía";
}

var_dump($texto);
echo "<hr>";


//tengo dudas de como hacerlo con un array.
$cadena=[];

if(empty($cadena)){
    $cadena=['juanito'];
    array_change_key_case($cadena, case_upper);
    
    
}else{
    echo "Esta cadena está llena";
}

var_dump($cadena);

?>