<?php
//Cookie: Fichero qeu se almacena en el ordenador del usuario que visita la web
//así se puede rastrear que usuario vuelve a la web. 

//Para crear Cookies. 

//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//Cookie Básica- setcookie("nombre","valor en texto", caducidad, ruta, dominio);
setcookie("micookie","AQUI TIENES TU GALLETA");



//Cookie con expiracion

//setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365)); valor para 1 año

setcookie("unminuto","valor de mi cookie de 1 minuto, transcurrido este minuto esta frase se borrará", time()+(60)); //valor para 60 segundos



header('Location:ver_cookies.php');//cambia la url de la pagina y me redirecciona a otro sitio.



?>

 

<?php 
echo "<br>";
echo "<br>";
 


?>
<!-- al pulsar aqui creas las cookies-->


<!-- al pulsar aqui borras las cookies-->



