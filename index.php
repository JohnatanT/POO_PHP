<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02</title>
    </head>
    <body>
        <?php
         //Carregando arquivo Caneta.php   
        require_once 'Caneta.php';
        
        //Instanciando meu objeto
        //Nome do Objeto = new Nome da Classe
        $c1 = new Caneta;
        
        //Atribuição
        
        //Objeito c1 no atributo cor recebe "Azul"
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->destampar();
        //Chamada do método rabiscar() da minha classe Caneta
        $c1->rabiscar();
        
        
        $c2 = new Caneta;
        $c2->cor = "Vermelha";
        $c2->ponta = 1.0;
        $c2->carga = 70/100;
        
        $c2->tampar();
        $c2->rabiscar();
        
        ?>
    </body>
</html>
