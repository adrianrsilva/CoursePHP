<div class="titulo">Include</div>

<?php
    echo 'Executei essa linha do arquivo include <br>';
    include('include_arquivo.php');
    /*include('include_arquivo.php'); //ao incluir múltiplas vezes necessário proteger função para não sobrescrever */
    echo soma(3,8) . '!<br>';
    echo "O contéudo da variável é '{$variavel}'.";
?>