<?php

/*
Ejercicio 1:
Crear una sesión que aumente su valor en 1 o disminuya en 1 en funcion
de si el paremetro get counter está a uno o a cero
*/


session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero']=0;
    
}

if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
}
if(isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
}
//session_destroy();


?>
<h1 align="center">EL VALOR DE LA SESSION NUMERO ES:  <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">AUMENTAR EL VALOR</a><br/><br>
<a href="ejercicio1.php?counter=0">DISMINUIR EL VALOR</a>