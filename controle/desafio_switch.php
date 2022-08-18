<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="C-F">Celcius > Fahrenheit</option>
        <option value="F-C">Fahrenheit > Celcius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
 const F_C = ((1-32) * (5/9));
 const C_F = ((1 * 9/5) + 32);
    $valor = $_POST['param'] ?? 0;
    $conversao = $_POST['conversao'];
    switch($conversao){
        case "km-milha":
            $resultado = $valor * 0.621371;
            echo "<br>Valor convertido igual a $resultado Milhas<br>";
            echo $conversao;
            break;
        case "milha-km":
            $resultado = $valor * 1.60934;
            echo "<br>Valor convertido igual a $resultado Kilometros<br>";
            echo $conversao;
            break;
        case "metro-km":
            $resultado = $valor * 0.001;
            echo "<br>Valor convertido igual a $resultado Kilometros<br>";
            echo $conversao;
            break;
        case "km-metro":
            $resultado = $valor * 1000;
            echo "<br>Valor convertido igual a $resultado Metros<br>";
            echo $conversao;
            break;
        case "C-F":
            $resultado = $valor * C_F;
            echo "<br>Valor convertido igual a °F $resultado <br>";
            echo $conversao;
            break;
        case "F-C":
            $resultado = $valor * F_C;
            echo "<br>Valor convertido igual a °C $resultado <br>";
            echo $conversao;
            break;
        default:
            echo "Nenhum valor encontrado!";
            break;
    }
?>