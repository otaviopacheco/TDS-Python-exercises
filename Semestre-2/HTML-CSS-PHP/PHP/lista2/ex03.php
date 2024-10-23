<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" value="enviar" name="enviar">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST["enviar"])){
        echo "botao apertado";
        $numero = $_POST["number"];
        if($numero >=0 and is_int($numero) == true ){
            echo "O numero é positivo e inteiro";
        }
        
    }


?>