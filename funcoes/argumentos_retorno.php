<div class="titulo">Argumentos & Retorno</div>

<?php
    function obterMensagem(){
        return 'Seja bem vindo(a)!';
    }

    echo obterMensagem();
    $m = obterMensagem();
    echo "<br> $m";
    echo "<br>" . obterMensagem();
    echo "<br>";
    var_dump(obterMensagem());

    function obterMensagemComNome($nome){
        return "Bem vindo, {$nome}!";
    }

    echo '<br>' . obterMensagemComNome('Wagner');
    echo '<br>' . obterMensagemComNome('Tiago');

    function soma($a, $b){
        return $a + $b;
    }

    echo '<br>' . soma(4,5);
?>