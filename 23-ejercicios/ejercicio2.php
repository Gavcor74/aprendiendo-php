<?php
/*
Ejercicio 2;
Debe ser una funcion
la funcion debe validar un email con filter Var
debe utilizar esa funcion y recoger una variable por GEt y validarla
mostrar el resultado

*/

function ComprobarEmail($email){
    $status="no valido";
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
    $status="valido";
        echo "Gracias por introducir su email:  '".$email."' por URL/GET";
    }

}

if(isset($_GET['email'])){
    echo ComprobarEmail($_GET['email']);
}   else{
    echo "Pasa por GET un email";
}



?>