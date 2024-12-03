<?php
class contaBanco {
    private $numero;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function __construct($numero, $tipo, $dono,  $status){
        $this->numero = $numero;
        $this->tipo = $tipo; 
        $this->dono = $dono;
        $this->saldo = 1000;
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
    }public function setStatus($status){
        $this->status = $status; 
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



    
    public function mudarStatus($statusConta){
        if ($this->saldo > 0 and $statusConta == "inativo"){
            return "você precisa retirar o dinheiro para fechar a conta";

        }
    }




    public function sacar($valorOperacao){
        if ($this->saldo == 0){
            return "impossivel fazer a operação, tu ta pelado";

        }elseif($valorOperacao >$this->saldo){
            return "tu n tem toda essa grana nao";
        }else{
            $this->saldo = $this->saldo - $valorOperacao;
            return "ok, novo saldo ".$this->getSaldo();
    
        }
    }






    public function depositar($valorOperacao) {
        if ($this->status == "inativo") {
            return "impossível debitar";
        } else {
            $this->setSaldo($this->getSaldo() + $valorOperacao); // Outra forma de fazer a operação de soma
            return $this->getSaldo();
        }
    }
    public function mensalidade($tipo){
        if($tipo == "CP"){
            return 10;
        }elseif($tipo == "CC"){
            return "sua taxa é de 12 reais";

        }
    


    }


}
?>