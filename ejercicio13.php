<?php
if($_POST){
    $boton=$_POST['valorboton'];
    switch($boton){
        case 1:
            echo "Boton 1";
        break;
        case 2:
            echo "Boton 2";
        break;
        case 3:
            echo "Boton 3";
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name=valorboton value="1">
        <input type="submit" name=valorboton value="2">
        <input type="submit" name=valorboton value="3">
    </form>
</body>
</html>