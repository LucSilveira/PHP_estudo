<h3 class="titulo">Tipo estático</h3>

<?php   
    class ExemploA
    {
        public $notStatic = 'Variável do objeto';
        public static $static = 'Váriavel da classe';

        public function MostrarNaoEstatico()
        {
            echo "Valor não estático - {$this->notStatic}" . '<br/>';
            echo "Valor estático - {$this->static}" . '<br/>';
            echo "Valor estático - " . self::$static . '<br/>';
        }

        public static function MostrarEstatico()
        {
            echo "Valor estático - " . self::$static . '<br/>';
        }
    }

    $objectA = new ExemploA();
    $objectA -> MostrarNaoEstatico();
    echo '<br/>';
    
    ExemploA::MostrarEstatico();
?>