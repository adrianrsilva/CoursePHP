<div class="titulo">Tipo Boolean</div>

<?php
    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(False);
    echo '<br>' . var_dump('false');
    echo '<br>' . is_bool(false);
    echo '<br>' . is_bool('true');

    // fazer as regras de conversões
    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); // apenas zero é false dos números
    echo '<br>' . var_dump((bool) 20); 
    echo '<br>' . var_dump((bool) -1); 
    echo '<br>' . var_dump((bool) 0.0); 
    echo '<br>' . var_dump((bool) 0.00001); 
    echo '<br>' . var_dump((bool) ""); // flase 
    echo '<br>' . var_dump((bool) " "); //true
    echo '<br>' . var_dump((bool) "0"); //false
    echo '<br>' . var_dump((bool) "00"); //todo resto é true
    
    echo '<br>' . var_dump((bool) !!"00"); 
    
?>