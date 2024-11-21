<?php
class contaBanco {
    private $numero;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function _construtor($numero, $tipo, $dono, $saldo, $status){
        $this->numero = $numero;
        $this->tipo = $tipo; 
        $this->dono = $dono;
        $this->saldo = $saldo;
        $this->status = $status;
    }


    // getters 
    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setDono($dono){
        $this->dono = $dono;

    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function setStatus($status){
        $this -> status = $status;
    }






    // setters 
    public function getNumero(){
        return $this->numero;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function getDono(){
        return $this-> dono;

    }
    public function getStatus(){
        return $this->status;
    }
    public function getSaldo(){
        return $this->saldo;
    }



    // metodos 
    public function debitar(){
        if(){


            
        }
    }



}



?>