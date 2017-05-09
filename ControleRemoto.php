<?php
//Carregando minha interface
require_once 'Controlador.php';

//Implementando minha interface Controlador a minha classe
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Metodos Especiais
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
             
   }
     private function getVolume(){
         return $this->volume;
     }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    //Sobrescrevendo meu metodos do COntrolador
    
    public function abrirMenu() {
        echo "Está ligado? ".($this->getLigado()?"Sim<br>":"Não<br>");
        echo "Está tocando? ".($this->getTocando()?"Sim<br>":"Não<br>");
        echo "Volume: ".$this->getVolume();
        for($i=0; $i<= $this->getVolume(); $i++){
            echo "/";
        }
        echo "<br>";
    }

    public function desligar() {
         $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "Fechando Menu<br>";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
        
    }

    public function maisVolume() {
        if($this->getligado() == true){
            $this->setVolume($this->getVolume() + 5);
        }
        
        
        
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(true);
        }
    }

}
