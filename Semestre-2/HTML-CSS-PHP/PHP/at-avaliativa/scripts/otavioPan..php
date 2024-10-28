<?PHP
$produto = $_POST["product"];
$qtd = $_POST["qtd"];
$price = 0; 
// echo "$produto";
if($produto == 1){
    $price = 49.90 * $qtd;
    echo "
    Quantidade total: $qtd<br>Total: $price" ;
}elseif($produto == 2){
    $price = 149.90 * $qtd;
    echo "Quantidade total: $qtd <br>Total: $price" ;
}elseif($produto == 3){
    $price = 49.90 * $qtd;
    echo "Quantidade total: $qtd <br>Total: $price" ;
}elseif($produto == 4){
    $price = 39.90 * $qtd;
    echo "Quantidade total: $qtd <br>Total: $price" ;
}
?>