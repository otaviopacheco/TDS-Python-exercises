<?php 
$salarioAnual = $_POST["salarioAnual"];
$salarioMes = $salarioAnual/12;
if($salarioAnual == 0) {
    echo "o salario anual nao pode ser 0";
}elseif($salarioAnual <= 10000){
    $alicota = (($salarioAnual*5)/100);
    $impostoMes = $alicota/12;
    echo "Sua alicota anual é $alicota <br> Sua alicota mensal é $impostoMes";
}elseif($salarioAnual <= 30000){
    $alicota = (($salarioAnual*10)/100);
    $impostoMes = $alicota/12;
    echo "Sua alicota anual é $alicota <br> Sua alicota mensal é $impostoMes";
}elseif($salarioAnual > 30000){
    $alicota = (($salarioAnual*15)/100);
    $impostoMes = $alicota/12;
    echo "Sua alicota anual é $alicota <br> Sua alicota mensal é $impostoMes";
}
echo "<br><a href='../calcDeImpRenda.html'>Calcular novamente</a>";
?>