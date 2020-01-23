<?php

/**
 * Crear un array con el contenido de la tabla;
 * ACCION   AVENTURA    DEPORTES
 * GTA      ASSASINS    FIFA19
 * COD      CRASH       PES19
 * PUGB     Prince of   MOTOGP19
 *          Persia
 * 
 * Cada file debe ir en un fichero separado (includes).
 */

    $tabla=array(
        "ACCION"=>array("GTA5","Call of Duty", "PUGB"),
        "AVENTURA"=>array("Assasins","Crash","Price of Persia"),
        "DEPORTES"=>array("FIFA19", "PES19", "MOTOGP19",)
        
    );

    var_dump(array_keys($tabla));//asi veo los indices. 
    $categorias=array_keys($tabla);

?>

<table border="1">
    <?php require_once 'encabezado.php';?>
    <?php require_once 'primera.php';?>
    <?php require_once 'segunda.php';?>
    <?php require_once 'tercera.php';?>
</table>

