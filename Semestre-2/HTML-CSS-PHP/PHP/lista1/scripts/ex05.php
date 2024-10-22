<?php

$comp = $_POST["comparador"];
if($comp % 2 == 0){
    echo "o numero é par";

}elseif ($comp % 2 != 0){
    echo "o numero é impar";
}

?>