<?php
require "contaBnco.php"; 

$numeroConta = $_POST["numeroConta"];
$tipoConta = $_POST["tipoConta"];
$donoConta = $_POST["donoConta"];
$valorOperacao = $_POST["valor"];
$statusConta = $_POST["statusConta"];
$opOpcao = $_POST["op"];


$novaConta = new contaBanco($numeroConta, $tipoConta, $donoConta, $statusConta);



$c = $novaConta->getNumero();
$t = $novaConta->getTipo();
$st = $novaConta->getStatus();
$sd = $novaConta->getSaldo(); 
$sdSc = $novaConta->sacar($valorOperacao);
$nSt = $novaConta->mudarStatus($statusConta);
$depSd = $novaConta->depositar($valorOperacao);
$tpC= $novaConta-> mensalidade($tipoConta);





if($opOpcao == "info"){
    echo "Número da Conta: ".$c."<br>";
    echo "Tipo da Conta: ".$t."<br>";
    echo "Status da Conta: ".$st."<br>";
    echo "Saldo atual: ".$sd."<br>";
} elseif($opOpcao == "sacar"){

    echo $sdSc;


}elseif($opOpcao == "depositar"){
    echo $depSd;


}elseif($opOpcao == "status"){
    echo $nSt;


}elseif($opOpcao == "pagarMensal"){
    echo $tpC;
}

?>