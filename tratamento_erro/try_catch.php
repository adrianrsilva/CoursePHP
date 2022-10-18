<div class="titulo">Try_Catch</div>

<?php

/* echo intdiv(7, 0); */

try {
    echo intdiv(7, 0);
} catch (Error $msg) {
    echo 'Teve um erro aqui<br>';
}/* catch(Exception $e){
    echo 'Teve um erro aqui<br>';
} */

try {
    throw new Exception('Um erro muito estranho'); //throw -> necessário lançar para Exception
    echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado! <br>';
}

echo 'Execução continua... <br>';