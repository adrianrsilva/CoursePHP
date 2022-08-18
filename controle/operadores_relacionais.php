<div class="titulo">Operadores Relacionais</div>

<?php
    //var_dump(1 == 1);
    //echo '<br>';
    //var_dump(1 > 1);
    //echo '<br>';
    //var_dump(1 >= 1);
    //echo '<br>';
    //var_dump(1 <> 1);
    //echo '<br>';
    //var_dump(1 != 1);
    //echo '<br>';
    //var_dump(1 < 1);
    
    
    var_dump(111 == '111');
    var_dump(111 === '111');
    var_dump(111 != '111');
    var_dump(111 !== '111');
    echo '<br><p>Relacionais no If/Else</p><hr>';
    $idade = 75;
    if($idade < 18){
        echo "Menor de idade = $idade anos<br>";
    }elseif($idade <= 65){
        echo "Adulto = $idade naos<br>";
    }else {
        echo "Terceira idade! = $idade anos";
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3);
    var_dump(50 <=> 50);
    var_dump(50 <=> 100);

    echo '<p>Valores pode ser V ou F</p><hr>';
    var_dump(!!100);
?>

<style>
p {
    margin-bottom: -10px;
}

hr {
    margin-bottom: 0px;
}
</style>