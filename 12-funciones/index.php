<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div class="w4-half w4-center"  style="color:#cc6600;background:#b7d7e8">






<?php
/**
 * 
 * FUNCIONES: Una funcion es un conjunto de instrucciones agrupadas bajo 
 * un nombre concreto y que pueden reutilizarse solamente invocando a la funcion tantas
 * veces como queramos, 
 * 
 * 
 * 
 * function nomnreDeMiFuncion (){
 *      //Bloque / Conjunto de Instrucciones.
 * }
 * 
 * nombre de mi funcion ($miparametro); Puedo llamar tantas veces la funcion, como veces necesito
 * 
 */
//Ejemplo 1

function muestraNombres(){
    echo "Victor</br>";
    echo "Pepe</br>";
    echo "carlos</br>";
    echo "Antonio</br>";
    echo "<hr>";
}

//invocar funcion

muestraNombres();

//Ejemplo 2
    function tabla($numero){
     echo "<h3> Tabla de multiplicar del número: $numero</h3>";
            for ($i=1; $i <=10; $i++) { 
                $resutado=$i*$numero;
                echo "$numero x $i = $resutado"."<br>";
                
            }
    }
    /*
    if(isset($_GET['numero'])){
        tabla($_GET['numero']);
    }else {
        echo "No hay número previsto a menos lo metas por la URL";
    }
    

    for ($contador=1; $contador <=10; $contador++) { 
        tabla($contador);
    }
    */
    echo "<hr>";
    //Ejemplo 3

    function calculadora ($numero1, $numero2){//parámetros obligatorios
            $suma=$numero1 + $numero2;
            $resta=$numero1 - $numero2;
            $multiplicacion=$numero1 * $numero2;
            $división=$numero1 / $numero2;
            $modulo=$numero1 % $numero2;
            echo "suma: $suma<br>";
            echo "resta: $resta<br>";
            echo "multiplicación: $multiplicacion<br>";
            echo "division: $división<br>";
            echo "modulo: $modulo<br>";

    }

    calculadora(10,30);
        
      //return.

        function getNombre ($nombre){
            $texto="El nombre es: $nombre";
            return $texto;
             }
        function getApellido($apellido){
            $texto="El apellido es: $apellido";
            return $texto;
        }



    //ejemplo 4 Aquí llamo a DOS funciones dentro de otra función.
    function devuelveElNombre($nombre, $apellido){
        $texto= getNombre($nombre)."<br>"
        . getApellido($apellido);
        return $texto;
    }


      echo devuelveElNombre("Jesus","Gavira");
      echo "<br>";
      echo getNombre("pepe");











?>



</div>


</body>
</html>