<?php
    namespace Outro\Nome;
?>

<h3 class="titulo">Use / As</div>

<?php
    echo __NAMESPACE__ . '<br/><br/>';

    include('useAs/useAsFile.php');

    function Soma($a, $b)
    {
        return $a . $b; //Forçando o erro
    }

    class Classe
    {
        public $variavel;

        function funct()
        {
            echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br/>';
        }
    }
    // _____________________________________________

    echo \Nome\Bem\Grande\constante . '<br/>';

    use const Nome\Bem\Grande\constante;
    echo constante . "<br/>";

    // Usando o 'as' para subtituis nome
    use Nome\Bem\Grande as ctx;
    echo Soma(1, 2) . '<br/>';
    echo ctx\Soma(1, 2) . '<br/>';

    // Forçando erro ao instaciar a função 'Soma' do 'useAsFile.php'
    // use function Nome\Bem\Grande\Soma;
    use function Nome\Bem\Grande\Soma as SomaReal;
    echo SomaReal(1, 2) . '<br/><br/>';

    // Acessando a classe do namespace do arquivo
    $a = new Classe();
    $a -> funct();

    // Acessando a clase do outro namespace
    $b = new \Nome\Bem\Grande\Classe();
    $b -> funct();

        // Ou
        $c = new ctx\Classe();
        $c -> funct();

        // Ou
        use \Nome\Bem\Grande\Classe as D;
        $d = new D();
        $d -> funct();
?>