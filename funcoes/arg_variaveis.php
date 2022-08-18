<div class="titulo">Argumentos Variavéis</div>

<?php
    function soma($a, $b){
        return $a + $b;
    }

    echo soma(4,5) . '<br>';

    function somaCompleta(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(1, 2, 3, 5, 6);

    function membros($titular, ...$dependentes){
        echo "Titular: $titular <br>";
        if($dependentes){
            foreach($dependentes as $dep){
                echo "Dependente: $dep <br>";
            }
        }
    }

    echo '<br>';
    membros("Ana", "Pedro", "Rafaela");
    echo '<br>';
    membros("Roras", "Pedro", "Rafaela");
?>