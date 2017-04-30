<?php
//Craindo a classe Caneta
class Caneta{
    //Atributos da classe Caneta
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    //Métodos da classe Caneta
    function rabiscar(){
        //Atributo dentro de um método que esta na propria classe $this(Será subistituido pelo nome do objeto)
        if ($this->tampada == true) {
            echo "Não posso rabiscar</br>";
        }else{
            echo "Estou rabiscando</br>";        
             }
    
        }
    
    //Métodos estão modificando um atributo
    function tampar(){
            $this->tampada = true;
        }
    
    function destampar(){
              $this->tampada = false;
        }   

    
    }