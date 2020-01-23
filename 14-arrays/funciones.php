<?php

$peliculas=array('Batman','Spiderman','El Señor de los anillos');
$cantantes=['2pac', 'Drake', 'jenifer lopez','alfredo'];
//VEAMOS AHORA DIRERENTES METODOS:

arsort($cantantes);
var_dump($cantantes);//ordena los elementos de una variables por length


asort($cantantes);
var_dump($cantantes);//igual que arriba pero en sentido inverso


//añadir elementos a un array

$cantantes[]="NATO";//corchetes vacíos y añadir índice nuevo. Así se añade índice a un array
var_dump($cantantes);

//Array_push; Contiene un montón de métodos. Sirve para añadir un valor dentro de un array
// es exactamente igual que el anterior con los corchetes.

array_push($cantantes, 'Pepito');//añadimos 'Pepito' al array
var_dump($cantantes);

//array_pop; sirve para quitar el último índice. Quitemos por ejemplo 'Pepito'

array_pop($cantantes);
var_dump($cantantes);

//si queremos quitar un índice en concreto??

unset($cantantes[0]);//de esta forma eliminamos el índice 0 del array $cantantes-
var_dump($cantantes);

//sacar un índice aleatorio de un array

//echo array_rand($cantantes);
//ahora quiero que ese índice sea mostrado
$indice=array_rand($cantantes);
echo $cantantes[$indice];//esto sería útil para según que aplicaciones o cosas
//que queramos hacer con un array.

//hacer un reverse y darle la vuelta a un array.

var_dump(array_reverse($cantantes));

//y si queremos buscar dentro de un array????

$busqueda=array_search('Drake',$cantantes);
var_dump($busqueda);

//contar numero de indices o elementos.

echo count($cantantes);
echo "<br>";
echo sizeof($cantantes);

//para saber que hay dentro de una variable, por supuesto el VAR_DUMP!!!
var_dump($cantantes);


//y hasta aqui varios métodos de PHP más usados. El resto se pueden ver en la 
//documentacion oficial de PHP.



?>