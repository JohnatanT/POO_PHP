<?php
//Craindo a classe Caneta
class Caneta{
    
    //Criando meus atributos
    public $modelo;
    private $ponta;
    private $cor;
    
   
    
    
    //Criando meus metodos acessores(get) e modificadores(set)
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    
    public function setCor($c){
        $this->cor = $c;
    }
    public function getCor(){
        return $this->cor;
    }
    
    
    }