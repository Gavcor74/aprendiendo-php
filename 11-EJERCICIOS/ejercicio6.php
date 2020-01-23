<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablas de Multiplicar</title>
</head>
<body style="background:#d9ecd0">
    <h1>Ejercicio 6: Mostrar una tabla de HTML con las tablas de multiplicar 
            del 1 al 10:</h1>
<table border='5'>
    <div>
        <tr>
            
            <td>
            <?php
            echo "<h2>Tabla del Uno</h2>";
            $tabla=1;
                for ($contador=1; $contador <=10; $contador++) { 
                    echo "1 x $contador = ". ($tabla*$contador);
                    echo "<br>";
                }
                
            
            ?>
            
            </td>        
            <td>
            <?php
                 echo "<h2>Tabla del Dos</h2>";

            $tabla=2;

                for ($contador=1; $contador <= 10; $contador++) { 
                    echo "2 x $contador = ". ($tabla * $contador);
                    echo "<br>";
                }

                
               

            ?>
            </td>
            <td>    
            <?php
                 echo "<h2>Tabla del Tres</h2>";
                $tabla=3;

                for ($contador=1; $contador <= 10; $contador++) { 
                    echo "3 x $contador = ". ($tabla * $contador);
                    echo "<br>";
                }
               
              
            ?>
            <td>
            <?php
                 echo "<h2>Tabla del Cuatro</h2>";
                $tabla=4;

                for ($contador=1; $contador <= 10; $contador++) { 
                    echo "4 x $contador = ". ($tabla * $contador);
                    echo "<br>";
                }
                
                
            ?>
            </td>
             <td>  
            <?php
                echo "<h2>Tabla del Cinco</h2>";
                $tabla=5;

                for ($contador=1; $contador <= 10; $contador++) { 
                    echo "5 x $contador = ". ($tabla * $contador);
                    echo "<br>";
                }
               
               
                 
            ?>
            </td>
        </tr>
        <tr>
                <td>
                <?php
                    echo "<h2>Tabla del Seis</h2>";
                    $tabla=6;

                    for ($contador=1; $contador <= 10; $contador++) { 
                        echo "6 x $contador = ". ($tabla * $contador);
                        echo "<br>";
                    }
                   
                    
                ?>
                </td>
                <td>
                    <?php
                    echo "<h2>Tabla del Siete</h2>";
                    $tabla=7;

                    for ($contador=1; $contador <= 10; $contador++) { 
                        echo "7 x $contador = ". ($tabla * $contador);
                        echo "<br>";
                    }
                    
                    
                ?>
                </td>
                <td>
                <?php
                    echo "<h2>Tabla del Ocho</h2>";
                    $tabla=8;

                    for ($contador=1; $contador <= 10; $contador++) { 
                        echo "8 x $contador = ". ($tabla * $contador);
                        echo "<br>";
                    }
                    
                    
                ?>
                </td>
                <td>    
                <?php
                    echo "<h2>Tabla del Nueve</h2>";
                    $tabla=9;

                    for ($contador=1; $contador <= 10; $contador++) { 
                        echo "9 x $contador = ". ($tabla * $contador);
                        echo "<br>";
                    }
                    
                    
                ?>
                </td>
                <td>
                <?php
                    echo "<h2>Tabla del Diez</h2>";
                    $tabla=10;

                    for ($contador=1; $contador <= 10; $contador++) { 
                        echo "10 x $contador = ". ($tabla * $contador);
                        echo "<br>";
                    }
                    
                    


                ?>
                </td>
        </tr>
    </div>    
</table>  
</body>
</html>

