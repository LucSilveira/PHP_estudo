<h3 class="titulo">Encapsulamento</h3>

<?php
    class A
    {
        public $varPublic = 'Público';
        protected $varProtected = 'Protegido';
        private $varPrivate = 'Privado';

        public function MostrarA()
        {
            echo "a - a) Público : {$this->varPublic} " . '<br/>';
            echo "a - b) Protegido : {$this->varProtected} " . '<br/>';
            echo "a - c) Privado : {$this->varPrivate} " . '<br/>';
        }

        protected function MostrarNaHeranca()
        {
            echo 'Não é a mamãe' . '<br/>';
        }
        
        private function naoMostrar()
        {
            echo 'Não me chama' . '<br/>';
        }
    }
    
    $a = new A();
    $a -> MostrarA();
    echo '<hr/><br/>';
    
    class B extends A
    {
        public function MostrarB()
        {
            echo "b - a) Público : {$this->varPublic}" . '<br/>';
            echo "b - b) Protegido : {$this->varProtected}" . '<br/>';
            // echo "b - c) Privado : {$this->varPrivate} " . '<br/>';

            parent::MostrarNaHeranca();
        }
    }

    $b = new B();
    $b->MostrarA();
    echo '<br/>';
    $b->MostrarB();
?>