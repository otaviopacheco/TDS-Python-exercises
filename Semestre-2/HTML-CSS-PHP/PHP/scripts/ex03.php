<?php
$fat = $_POST["fat"];
for($i = $fat-1; $i > 0; $i--){
    $fat *= $i; 
    
}
echo "$fat";
?>
