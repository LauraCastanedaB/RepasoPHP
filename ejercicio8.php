<?php
    if($_POST)
    {
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $multiplicacion=$valorA*$valorB;
        $division=$valorA/$valorB;
        

        echo "Suma: ".$suma."<br/>";
        echo "Resta: ".$resta."<br/>";
        echo "Multiplicacion: ".$multiplicacion."<br/>";
        echo "Division: ".$division."<br/>";
        
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
    <form action="ejercicio8.php" method="post">
        ValorA:
        <input type="number" name="valorA" id="">
        <br>
        ValorB:
        <input type="number" name="valorB" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

