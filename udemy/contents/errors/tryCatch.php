<h3 class="titulo">Try-Catch</h3>

<?php
    try {
        echo intdiv(7, 0);

    } catch (Error $e) {
        echo $e;
    }
    echo '<br/><br/>';

    try{
        throw new Exception("Um erro aconteceu");
        echo intdiv(7, 0) . '<br/>';
    
    }catch(DivisionByZeroError $e){
        echo "Divisão por zero" . '<br/>';

    }catch(Throwable $e){
        echo $e -> getMessage() . '<br/>';
    
    }finally{
        echo "Trecho sempre executado!" . '<br/>';
    }

    echo '<br/>' . "Programa roda normalmente mesmo com erros";
?>