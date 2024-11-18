<?php
$contaNome = $_POST["conta"];
$valorPix = $_POST["valor"];
class Conta{
    private $numero;
    private $saldo;
    function __construct($numero,$saldo){
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
    function depositar($valor){
        $this->saldo += $valor;
    }

    function setNumero($numero){
        $this->numero = $numero;
    }
    function getNumero(){
        return $this->numero;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
}
$minhaConta = new Conta($contaNome, $valorPix);



?>  