<?php

/*
ARRAYS
Un array es una coleccción o un conjunto de datos/valores, bajo un único 
nombre y para acceder a esos valores podemos usar un índice numérico o 
alfa numérico. Vamos, una variable donde tu metes datos.-
*/

//vamos a definir aquí un par de variables, por si tenemos que usarlas;
$peliculas=array('Batman','Spiderman','El Señor de los anillos');
$cantantes=['2pac', 'Drake', 'jenifer lopez'];

//Array ASOCIATIVO.
$personas=array(
    'nombre'=>'Jesús',
    'apellidos'=>'Gavira',
    'web'=>'gavira.carbonmade.es');
var_dump($cantantes);
var_dump($personas);

echo $personas['apellidos'];
echo "<br><br><br>";
var_dump($_GET); //Si paso un valor por URL (?hola=Hello&numero=3) tiene un valor asociativo.
//Los datos que se envian por POST (httl) tambien. 
echo $peliculas[0];
echo "<br>";
echo $peliculas[1];

//Recorrer con FOR
echo "<ul>";
echo "<h1>Listado de películas</h1>";
for ($i=0; $i <count($peliculas); $i++) { 
    echo "<li>".$peliculas[$i]. "</li>";
}

echo "</ul>";

//Recorrer con FOREACH

echo "<ul>";
echo "<h1>Listado de Cantantes</h1>";

foreach ($cantantes as $cantante){//recorreme todo el array y en cada iteracion me creas 
    //un variable $cantante con el contenido de ese índice. 
    echo "<li>".$cantante."</li>";

}

echo "</ul>";
echo "<br><br><br>";

//ARRAYS MULTIDIMENSIONALES
//el indice al estar con comillas son asociativos.

$contactos=array(
            array(
                'nombre'=>'Antonio',
                'email'=>'antonio@gmail.com'
 
            ),


            array(
                'nombre'=>'Luis', 
                'email'=>'luis@gmail.com'
 
            ),

            array(
                'nombre'=>'Salvador',
                'email'=>'salva@gmail.com'
 
            ),

);

var_dump($contactos);

echo $contactos[1]['nombre']."<br>";
echo $contactos[0]['nombre']."<br>";
echo $contactos[2]['nombre']."<br>";


foreach ($contactos as $key => $value) {
    var_dump($value['nombre']);
}








?>