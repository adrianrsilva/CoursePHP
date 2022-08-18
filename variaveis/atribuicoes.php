<div class="titulo">Atribuições</div>

<?php
    $title = 'Atribuições';
    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero - 1;
    echo '<br>' . $numero;
    $numero = $numero + 1.5;
    echo '<br>' . $numero;
    $numero--; //pós fixada
    echo '<br>' . $numero;
    --$numero; //pré fixada
    echo '<br>' . $numero;
    $numero++;
    echo '<br>' . $numero;
    ++$numero;
    echo '<br>' . $numero;
    $numero -= 5;
    echo '<br>' . $numero;
    $numero += 5;
    echo '<br>' . $numero;
    $numero *= 10;
    echo '<br>' . $numero;
    $numero /= 5;
    echo '<br>' . $numero;
    $numero %= 5;
    echo '<br>' . $numero;
    $numero **= 5;
    echo '<br>' . $numero;
    $numero .= 5; // Apenas concatenação
    echo '<br>' . $numero;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;
    $texto .= ' de verdade';
    echo '<br>' . $texto;

    //$variavelInexistente .= ' valor existente';
    echo '<br>' . $texto;
    $valor = $variavelInexistente ?? ' valor default'; // expressão lambida
    echo '<br>' . $valor;

?>