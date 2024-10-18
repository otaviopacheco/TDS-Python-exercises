 <?php
 echo "entrou";
$inp1 = $_POST["n1"];
$inp2 = $_POST["n2"];
    if($inp1 > $inp2){
        echo "O primeiro numero é maior";
    }elseif($inp1 < $inp2){
        echo "O segundo numero é maior";
    }
?> 