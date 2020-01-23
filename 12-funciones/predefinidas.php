<?php

//debuggear para ver el resultado de una variable o de algún dato.
$nombre="jesus";
var_dump($nombre);

//Fechas

echo date('d-M-y');
echo "<br>";
echo time();
echo "<br>";
//Matemáticas
echo "Raiz cuadrada de 10: ". sqrt (10);
echo "<br>";
echo "Numero aleatorio entre 20 y 30: ".rand(20,30);
echo "<br>";
echo "Número Pi: " . pi();
echo "<br>";
echo "Redondear " .round(7.236568,2);//a la derecha de la coma se redondea el numero de decimales que deseas.

//Más funciones generales
echo "<br>";
echo gettype($nombre);
if(is_string($nombre)){
    echo " es un string";
}else{
    echo " es un int";
}
echo "<br>";
//comprobar si existe una variable, detecta tipos
if(isset($nombre)){
    echo "la variable existe";
}else{
    echo "la variable no existe";
}

echo "<br>";

$frase= "   mi contenido     ";
echo $frase; // no imprime los espacios

var_dump($frase);// haciendo un var_dump se ve que tienen espacios length=20
echo "<br>";
//limpiar espacios
var_dump(trim($frase));// el trim hace una limpieza de codigo eliminando los espacios en blanco.
//digamos que el trim sanea el contenido de las variables.

echo "<br>";

//eliminar variables / indices
$year=2020;
//unset($year);
echo $year;
var_dump($year);
echo gettype($year);

// Comprobar variable vacia.
$texto=FALSE;


if(empty($texto)){
    echo "la variable texto esta <i>vacía</i>";
}else{
    echo "<h1>La variable texto tiene contenido</h1>";
}
echo "<br>";
//Contar carácteres de un string
$cadena="12345";
echo strlen($cadena);
echo "<br>";
//Encontrar un string en la posicion de un caracter determinado. Encontrar caracter.

$frase="La vida es bella";
echo strpos($frase, "a");
echo "<br>";
//Reemplazar palabras de un string
$frase=str_replace("vida","moto",$frase);
echo $frase;
echo "<br>";
//Convertir Mayusculas en minúsculas

echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);

?>