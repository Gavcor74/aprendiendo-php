<?php


/**Una sesion: Almacenar y persistir datos del usuario mientras navega en un sitio web
 * hasta que cierra sessión o cierra el navegador. Puede almacenar mucha informacion 
 * y la información está en el servidor web, por lo tanto es muy seguro el almacenaje.
 * Cuando cierras el navegador la sesión se pierde.
 */

 //Inicio de sesión.

 session_start();

 //Variable LOCAL
 $variable_normal="Soy una cadena de texto";
//Variable de SESION
 $_SESSION['variable_persistente']="HOLA SOY UNA SESION ACTIVA";


 echo $variable_normal;
 echo "<br>";

 echo $_SESSION['variable_persistente'];












?>