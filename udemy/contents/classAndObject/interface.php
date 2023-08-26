<h3 class="titulo">Interface</h3>

<?php
    interface Animal
    {
        function respirar();
    }

    interface Mamifero
    {
        function Mamar();
    }

    interface Canino extends Animal, Mamifero
    {
        function latir();
    }

    // Quando precisamos adquirir os métodos de uma classe
    // sem chamar seus atributos, utilizamos o extends

    // class Cachorro implements Animal, Canino
    class Cachorro implements Canino
    {
        function respirar()
        {
            echo "Respirando com a linguinha pra fora - reh reh reh" . '<br/>';
        }

        function latir()
        {
            echo 'Au au' . '<br/>';
        }

        function Mamar()
        {
            echo 'Leite pra neném';
        }
    }

    $auau = new Cachorro();
    $auau -> respirar();
    $auau -> latir();
?>