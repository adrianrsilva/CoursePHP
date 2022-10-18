<?php

namespace Aritmetica;

?>


<!-- Sobrescreva o método intdiv para....
    - Lançar uma exceção quando tentar dividir por zero
    - Lançar uma exceção quando o resultado não for inteiro
    - Dividir normalmente nos demais casos

    Os teste...
    - Intdiv com os parâmetros 8 e 2 [Sucesso]
    - Intdiv com os parâmetros 8 e 2 [Exceção]
    - Intdiv com os parâmetros 8 e 2 [Exceção]
    - Intdiv "original" com os parâmetros 8 e 3 [Sucesso]
-->

<?php

class IntdivException extends \Exception
{
}

function intdiv($a, $b)
{
    if ($b == 0) {
        throw new \DivisionByZeroError();
    }
    if ($a % $b > 0) {
        throw new IntdivException();
    }
    return $a / $b;
}

$divisoresAvaliados = [[8, 2], [8, 3], [8, 0]];
