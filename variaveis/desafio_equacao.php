<div class="titulo">Desafio Equação</div>

<?php 
    $numeradorA = (6 * (3 + 2)) ** 2;
    $numeradorB = (1 - 5) * (2 - 7);
    $denominadorA = 3 * 2;
    $denominadorB = 2;
    $base = 10 ** 3;
    $a = $numeradorA / $denominadorA;
    $b = ($numeradorB / $denominadorB) ** 2;
    $numeradorFinal = ($a - $b) ** 3;
    $resultado_final = $numeradorFinal / $base;
    echo "O resultado final é " . $resultado_final . ".";
?>