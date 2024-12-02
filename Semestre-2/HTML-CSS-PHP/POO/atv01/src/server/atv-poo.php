<?php
require "contaBnco.php"; 

$numeroConta = $_POST["numeroConta"];
$tipoConta = $_POST["tipoConta"];
$donoConta = $_POST["donoConta"];
$valorOperacao = $_POST["valor"];
$statusConta = $_POST["statusConta"];
$opOpcao = $_POST["op"];


$novaConta = new contaBanco($numeroConta, $tipoConta, $donoConta, $statusConta = "ativo", $valorOperacao, 1000);



$c = $novaConta->getNumero();
$dc = $novaConta->getDono();
$t = $novaConta->getTipo();
$st = $novaConta->getStatus();
$sd = $novaConta->getSaldo(); 






if($opOpcao == "info"){
    echo "Número da Conta: ".$c."<br>";
    echo "Dono da Conta: ".$dc."<br>";
    echo "Tipo da Conta: ".$t."<br>";
    echo "Status da Conta: ".$st."<br>";
    echo "Saldo atual: ".$sd."<br>";
} elseif($opOpcao == "sacar"){
    $sdSc = $novaConta->sacar($valorOperacao);
    echo $sdSc;


}elseif($opOpcao == "depositar"){
    $depSd = $novaConta->depositar($valorOperacao);
    echo $depSd;


}elseif($opOpcao == "status"){
    $nSt = $novaConta->mudarStatus($statusConta);
    echo $nSt;


}elseif($opOpcao == "pagarMensal"){
    $tpC= $novaConta-> mensalidade($tipoConta);
    echo $tpC;
}elseif($opOcao = "retorno"){
    $rtn = $novaConta->investir ($valorOperacao);
    echo $rtn;
}

?>