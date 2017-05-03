<?php
//Craindo a classe Caneta
class Caneta{
    //Atributos da classe Caneta
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    //Métodos da classe Caneta
    public function rabiscar(){
        //Atributo dentro de um método que esta na propria classe $this(Será subistituido pelo nome do objeto)
        if ($this->tampada == true) {
            echo "Não posso rabiscar</br>";
        }else{
            echo "Estou rabiscando</br>";        
             }
    
        }
    
    //Métodos estão modificando um atributo
    public function tampar(){
            $this->tampada = true;
        }
    
    public function destampar(){
              $this->tampada = false;
        }   

    
    }