<?php include 'includes/cabecera.php';?>
    
    
    
    <!--Contenido-->
    <div>
        <h2>Esta es la página de inicio</h2>
        <p>Texto de prueba</p>
    </div>
    
    <?php var_dump($nombre);   
    /*
    los include son menos restrictivos, ya que si hay errores, siguen presentando 
    la pagina, por lo tanto es mejor usar los require. Los requires son mas estrictos.
    */
    
    
    ?>





<?php include 'includes/footer.php';?>


