<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;
    echo '<br>' . $TAXA_DE_JUROS . '!'; // Com $ não funciona a constante

    const NOVA_TAXA = 2.5;
    echo '<br>'. NOVA_TAXA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;
    echo '<br>' . __LINE__;
    echo '<br>' . __FILE__;
?>