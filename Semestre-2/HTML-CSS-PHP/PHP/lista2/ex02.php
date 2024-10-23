<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nota[]" placeholder="nota 1">
        <input type="text" name="nota[]" placeholder="nota 2">
        <input type="text" name="nota[]" placeholder="nota 3">
        <legend>operação desejada</legend>
        <select name="operacao" id="">
            <option value="A">A</option>
            <option value="P">P</option>
            <option value="H">H</option>
        </select>
        <input type="submit" name="btn">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["btn"])){
        $notas = $_POST["nota"];
        $operacao = $_POST["operacao"];
        $notasTam = count($notas);
        $media = 0;
        for($i = 0; $i< $notasTam; $i++){
            $media= $media + $notas[$i];
        }
            if ($operacao =="A"){
                $media /=$notasTam;
                echo $media;
            }elseif ($operacao == "P"){
                $pond = ($notas[0]*5)+ ($notas[1]*3)+ ($notas[2]*2)/10;
                echo $pond;
            }
            
            // elseif($operacao == "H"){


            // } nao entendi entao nao fiz

    }

?>