<?php
$number = $_POST["numero"];
$count = 0;
do {
    $resp = $number * $count;
    echo "<br>$number x $count = $resp";
    $count++;

}while($count <= 10)

?>