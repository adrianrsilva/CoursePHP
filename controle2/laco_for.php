<div class="titulo">Laço For</div>

<?php
    for($cont = 1; $cont <= 5; $cont++){
        echo "$cont <br>";
    }

    echo "<hr>";

    for(; $cont <= 10; $cont++){
        echo "$cont <br>";
    }

    echo "<hr>";

    for(; $cont <= 15; ){
        echo "$cont <br>";
        $cont++;
    }

    echo "<hr>";

    $array = [1 => 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

    print_r($array);
    echo '<hr>';
    for($i = 1; $i <= count($array); $i++){
        echo "{$array[$i]} <br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b','c','d']
    ];

    echo "<hr>";

    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo "{$matrix[$i][$j]} ";
        }
        echo "<br>";
    }
?>