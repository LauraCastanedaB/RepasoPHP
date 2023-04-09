<?php
    if($_POST)
    {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        // operadores relacionales comparadores

        if($valorA==$valorB){
            echo "Son iguales";
        }elseif($valorA>$valorB){
            echo "A es mayor";
        }elseif($valorA<$valorB){
            echo "B es mayor";
        }
        
    }
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones matematicas</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        ValorA:
        <input type="number" name="valorA" id="">
        <br>
        ValorB:
        <input type="number" name="valorB" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

