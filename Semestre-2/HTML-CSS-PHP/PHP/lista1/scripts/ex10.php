<?php
$possivelMes = [1,2,3,4,5,6,7,8,9,10,11,12];
$mesInsirido = $_POST["mesInsirido"];
for ($i = 0; $i <count($possivelMes); $i++) {
    if ($possivelMes[$i] == $mesInsirido and $mesInsirido ==1){
        echo "é Janeiro";
    }

}

?>