<?php 
$fn = $_POST["fn"]; 

function intDetector($fn){
    
    if($fn > 0){
        $fn = (int) $fn;
        return  true;        

    } else {
        return false;
    }
}
$fnType = intDetector($fn);



function Enesimo($fnType,$fn){
    if  ($fnType == false){
        echo "Impossivel prosseguir";
    }elseif ($fnType == true){
        
        
        $termos = [0,1];
        
        for ($i = 2; $i < $fn; $i++){ 
            $termos[$i] = $termos[$i-2] + $termos[$i-1];

        }
        print_r($termos);
    }

}

$resp = Enesimo($fnType, $fn);
echo "$resp<br>";

?>