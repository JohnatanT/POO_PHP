<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02</title>
    </head>
    <body>
        <?php
       //Carregando minha classe
        require_once 'Caneta.php';
        
        //Instanciando meu objeto
        $c1 = new Caneta();
        
        //Colocando valores atraves do meu metodo set
        $c1->setModelo("Bic");
        $c1->setPonta(0.5);
        $c1->setCor("Azul");
        
        //Chamando os valores pelo meu atributo get
        echo "Eu tenho uma caneta do tipo {$c1->getModelo()} com a ponta {$c1->getPonta()} e cor {$c1->getCor()}";
        
        
        ?>
    </body>
</html>
