<div class="titulo">Interpolação</div>

<?php
    $numero = 10;
    echo $numero;
    echo '<br> $numero'; // não interpola
    echo "<br> $numero + 1"; // interpola

    $texto = "A sua nota é: $numero";
    echo "<br> $texto";
    $objeto = 'caneta';
    echo "<br>Eu tenho 5 $objeto"; //Não junta 
    echo "<br>Eu tenho 5 {$objeto}s"; // Junta
    echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; //Espaço sempre no final
?>