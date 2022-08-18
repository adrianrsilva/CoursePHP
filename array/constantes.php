<div class="titulo">Constantes Array</div>

<?php
    const FRUTAS = ['laranja', 'abacaxi'];
    //FRUTAS[0] = 'banana'; //Não altera por ser constante
    echo FRUTAS[0];

    const CARROS = array("Fiat" => "Uno", "Ford" => "Fiesta");
    echo '<br>' . CARROS["Fiat"];

    define('CIDADES', array('Belo Horizonte', 'Recife'));
    // CIDADES[0] = 'Rio de Janeiro'; Não pode ser alterada também com define
    echo '<br>' . CIDADES[1];