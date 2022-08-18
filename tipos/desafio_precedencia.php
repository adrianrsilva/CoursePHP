<div class="titulo">Desafio Precedência</div>

<?php
    echo '<p>1. Qual o valor será impresso?</p>';
    //echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // Resultado = INF pois é divisor de 0
    echo 'INF';

    echo '<p>2. Qual expressão imprime o valor 100?</p>';
    echo 'a) ', (1 + 2) * 20 - 15, '<br>'; //errada
    echo 'b) ', 4 * 5 ** 2, '<br>'; // certa 
    echo 'c) ', 2 ** 3 ** 5 / 1e25, '<br>'; //errada
    echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>'; //errada
    echo 'Resposta correta = b';
?>