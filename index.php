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
        
       $c1->modelo = "Bic Cristal";
       $c1->cor = "Azul";
       
     
       $c1->tampar();
       $c1->rabiscar();
        
        ?>
    </body>
</html>
