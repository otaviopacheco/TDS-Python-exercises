<?php
$numeroConta = $_POST["numeroConta"];
$tipoConta = $_POST["tipoConta"];
$donoConta = $_POST["donoConta"];
$saldoConta = $_POST["saldoConta"];
$statusConta = $_POST["statusConta"];


class contaBanco {
    private $numero;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;


    function _construtor($numero, $tipo, $dono, $saldo, $status){
        $this->numero = $numero;
        $this->tipo = $tipo; 
        $this->dono = $dono;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    function setNumero( $numero){
        $this->numero = $numero;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function setDono($dono){
        $this->dono = $dono;

    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    function setStatus($status){
        $this -> status = $status;
    }







    function getNumero(){
        return $this->numero;
    }
    function getTipo(){
        return $this->tipo;
    }


}
$novaConta


?>