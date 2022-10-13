<div class="titulo">Modificador Final</div>

<?php

    abstract class Abstrata{
        public abstract function metodo1();

        public final function metodo2(){
            echo 'Não vou mudar!<br>';
        }
    }

    class Classe extends Abstrata {
        public function metodo1()
        {
            echo 'Executando método 1<br>';
        }

        /* public function metodo2(){

        } */
    }

    $classe = new Classe('');
    $classe->metodo1();
    $classe->metodo2();

    final class Unica {
        public $att = 'Valor único';
    }

    /* class Duplicata extends Unica{
        public $att2 = 'Valor';
    } */

    $unica = new Unica();
    echo $unica->att;


?>