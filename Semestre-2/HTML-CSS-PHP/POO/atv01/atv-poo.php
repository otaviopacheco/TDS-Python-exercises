<?php
require "contaBnco.php"; 

$numeroConta = $_POST["numeroConta"];
$tipoConta = $_POST["tipoConta"];
$donoConta = $_POST["donoConta"];
$saldoConta = $_POST["saldoConta"];
$statusConta = $_POST["statusConta"];
echo "teste = $numeroConta";
$novaConta = new contaBanco($numeroConta, $tipoConta, $donoConta, $saldoConta, $statusConta);
$c = $novaConta->getNumero();
$t = $novaConta->getTipo();
echo "Número da Conta: ".$c."<br>";
echo "tipo da Conta: ".$t."<br>";
?>