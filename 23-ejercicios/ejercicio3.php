<?php

/**
 * HACER UNA CALCULADORA QUE SE LE PASEN LOS DATOS
 * POR UN FORMULARIO.
 * HACER UNA INTERFAZ DE USUARIO (FORMULARIO)CON DOS INPUTS Y 4 BOTONES 
 * UNO PARA SUMAR, RESTAR, DIVIDIR Y MULTIPLICAR.
 */


if(isset($_POST['num1']) && ($_POST['num2'])){
     $resultado=false;

    if(isset($_POST['sumar'])){
        $resultado="El resultado es: ". ($_POST['num1'] + $_POST['num2']);
    }
    if(isset($_POST['restar'])){
       $resultado="El resultado es: ". ($_POST['num1'] - $_POST['num2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado="El resultado es: ". ($_POST['num1'] * $_POST['num2']);
    }
    if(isset($_POST['dividir'])){
        $resultado="El resultado es: ". ($_POST['num1'] / $_POST['num2']);
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA PHP</title>
</head>

<body>
    <h1 align="center">CALCULADORA PHP</h1>

    <form action="ejercicio3.php" method="POST">

        <label for="num1"><br>
            <p>INTRODUCE UN NUMERO: <input type="number" name="num1"></p>
        </label><br>

        <label for="num2"><br>
            <p>INTRODUCE UN NUMERO: <input type="number" name="num2"></p>
        </label><br>

        <input type="submit" value="sumar" name="sumar" />
        <input type="submit" value="restar" name="restar" />
        <input type="submit" value="multiplicar" name="multiplicar" />
        <input type="submit" value="dividir" name="dividir" />

    </form>

<?php
if($resultado != false):
    echo "<h2>$resultado</h2>";
endif



?>








</body>

</html>