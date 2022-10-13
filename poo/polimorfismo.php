<div class="titulo">Polimorfismo</div>

<?php


    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida{
        
    
    }
    class ArrozAGrega extends Arroz{

    }

    class Feijão extends Comida{

    }

    class Sorvete extends Comida{

    }

    class Pessoa {
        public $peso;

        function __construct($peso)
        {
            $this->peso = $peso;
        }

        public function comer(Comida $comida){ //Chave do polimorfismo
            $this->peso += $comida->peso;
        }
    }

    $c1 = new Arroz();
    $c1->peso = 0.65;

    $c2 = new Sorvete();
    $c2->peso = 1.0;

    $p = new Pessoa(83.35);
    $p->comer($c1);
    $p->comer($c2);

    echo $p->peso;
?>