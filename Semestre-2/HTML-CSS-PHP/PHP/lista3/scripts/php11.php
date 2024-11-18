<?php
$taxaImposto = $_POST["taxa"];
$custo = $_POST["custo"];

function somaImposto($taxaImposto, $custo) {
    $custoComImposto = $custo + ($custo * $taxaImposto / 100);
    return $custoComImposto;
}

$custoFinal = somaImposto($taxaImposto, $custo);
echo "O custo final com imposto é de: $custoFinal pila";
?>
