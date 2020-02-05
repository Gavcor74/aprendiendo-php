<?php


if ($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
    
    unset($_COOKIE['unminuto']);
    setcookie('unminuto','',time()-100);
}

header('Location:ver_cookies.php');



?>