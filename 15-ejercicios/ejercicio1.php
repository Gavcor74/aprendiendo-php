<?php

/*
Ejercicio1:Hacer un programa en PHP que tenga un array 
con 8 numeros enteros y que haga lo siguiente: 

1.recorrerlo y mostrarlo.
2.Ordenarlo y mostrarlo 
3.Mostrar su longitud 
4.Buscar un elemento en el array.
5.Buscar por parámetro que me llegue por la URL
*/
//FUNCIONES 

function mostrarArray($numeros){//el parametro que le pasamos es el array 
    $resultado="";//aquí decimos que el resultado va a ser un string. 
    foreach ($numeros as $lista) {
        //resultado=$resultado.$lista."<br/>";
        $resultado.= "<li>". $lista."</li>";

    }
    return $resultado;
}


$numeros=array(22,44,611,15,78,2);

//1.Recorrelo y muestralo-

echo "<h2>Recorrerlo y mostrarlo</h2>";
echo mostrarArray($numeros);


echo "<br>";
//2.Ordenarlo y mostrarlo

asort($numeros);
echo mostrarArray($numeros);

//3.Mostrar su longitud
echo "<h2>Numero total de elementos</h2>";
echo "<br>";
echo count($numeros);

//Buscar un elemento en el array
$busqueda=44; 
//echo "<h2>Buscar en el array el numero $busqueda</h2>";
echo "<br>";
//$resultado=array_search($busqueda,$numeros);
//echo $resultado;
/*
if(array_search($busqueda,$numeros)){
    $resultado=array_search($busqueda,$numeros);
    
    echo "El índice que ocupa ". $busqueda ." es ". "$resultado"; 

}else{
    echo "No existe ese número";
}
*/


if (isset($_GET['numero'])){//si introduces un numero por url 
        $busqueda=$_GET['numero'];//ese numero se establece como variable.
        echo "<h2>Buscar en el array el numero $busqueda</h2>";
        $resultado=array_search($busqueda,$numeros);//la variable resultado es consecuencia de la 
        //búsqueda del número en los índices del array.
        
        
        if(!empty($resultado)){//si ese numero en la url corresponde a un índice
            echo "El índice que ocupa ". $busqueda ." es ". "$resultado"; 
        }else{
            echo "No existe ese número";
        

        }
}





?>