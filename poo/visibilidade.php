<div class="titulo">Visibilidade</div>

<?php
class A
{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA()
    {
        echo "Class a) Public {$this->publico} <br>";
        echo "Class a) Protegido {$this->protegido} <br>";
        echo "Class a) Privado {$this->privado} <br>";
    }

    private function naoMostrar(){
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

//echo "Fim";

class B extends A {
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) Privado = {$this->privado} <br>";
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();





?>