<?php
$anos = $_POST["anos"];
$meses = $_POST["meses"];
$dias = $_POST["dias"];
function converterParaDias($anos, $meses, $dias) {
    $diasAnos = $anos * 365;
    $diasMeses = $meses * 30; 
    return $diasAnos + $diasMeses + $dias;
}



if (is_numeric($anos) && is_numeric($meses) && is_numeric($dias)) {
    $totalDias = converterParaDias($anos, $meses, $dias);

    
    echo "<h1>Resultado:</h1>";
    echo "<p>A sua idade total em dias é: <strong>$totalDias dias</strong></p>";
} else {
    echo "<p>Por favor, insira valores válidos para anos, meses e dias.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
