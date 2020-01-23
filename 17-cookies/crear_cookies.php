<?php
//Cookie: Fichero qeu se almacena en el ordenador del usuario que visita la web
//así se puede rastrear que usuario vuelve a la web. 

//Para crear Cookies. 

//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//Cookie Básica-
setcookie("micookie","AQUI TIENES TU GALLETA");


//Cookie con expiracion

setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));







?>

<a href="ver_cookies.php">Ver las Galletas</a>