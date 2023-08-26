<h3 class="titulo">Desafio dos 7 erros</h3>

<?php
    // interface Template
    // {
    //     function metodo01();
    //     public function metod02($parametro);
    // }

    // abstract class ClasseAbstrata extends Template
    // {
    //     public function metodo03()
    //     {
    //         echo 'Estou funcionando';
    //     }
    // }

    // class Classe implements ClasseAbstrata
    // {
    //     function __construct($parametro)
    //     {
            
    //     }
    // }

    // $exemplo = Classe();
    // $exemplo.metodo03();
?>

<?php
    // Resolvendo problemas
    interface Template
    {
        function metodo01();
        
        function metodo02($parametro);
    }

    abstract class ClasseAbstrata implements Template //1º
    {
        public function metodo01() //2º
        {
            echo 'Corrigindo erro de implementação do método 02' . '<br/>';
        }

        public function metodo02($parametro) //3º
        {
            echo 'Corrigindo erro de implementação do método 02' . '<br/>';
        }

        public function metodo03()
        {
            echo 'Estou funcionando';
        }
    }

    class Classe extends ClasseAbstrata //4º
    {
        function __construct($parametro)
        { 
            echo $parametro . '<br/>';
        }
    }

    $correcao = new Classe("Corrigindo erro do construtor"); //5º - 6º
    $correcao -> metodo03(); //7º
?>