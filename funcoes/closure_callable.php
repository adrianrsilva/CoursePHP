<div class="titulo">Closure & Callable</div>

<?php
    $soma1 = function($a, $b){
        return $a + $b;
    };


    echo $soma1(2, 3) . ' ';

    echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';
?>