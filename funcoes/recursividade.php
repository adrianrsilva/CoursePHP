<div class="titulo">Recursividade</div>

<?php
    function somaUmAte($numero){
        $soma = 0;
        for(; $numero >= 1; $numero--){
            $soma += $numero;
        }
        return $soma;
    }

    echo somaUmAte(5) . '<br>';

    function somaRecursivaUmAte($numero){
        if($numero === 1){
            return 1;
        }
        return $numero + somaRecursivaUmAte($numero - 1);
    }

    echo somaRecursivaUmAte(150) . '<br>';
?>