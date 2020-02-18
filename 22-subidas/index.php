
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subidas de archivos</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <p><h2 align="center">SUBIDAS DE ARCHIVOS</h2></p>
        <input type="file" name="jesusito"><br/> 
        <input type="submit" value="Enviar"><br/>

    </form>

    <h1>LISTADO DE IMAGENES</h1>

    <?php

        $gestor=opendir('./images');

        if($gestor):
            while(($image=readdir($gestor)) !== false):
                if($image !='.' && $image !='..'):
                    echo "<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;

        endif;



    ?>

    
</body>
</html>