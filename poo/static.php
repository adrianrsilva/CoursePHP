<div class="titulo">Static PHP</div>

<?php
class A
{
    public $naoStatic = 'Variavel de instância';
    public static $static = 'Variavel de classe (estática)';

    public function mostrarA()
    {
        echo "Estático = {$this->static} <br>";
        echo "Estático = {$this->naoStatic} <br>";
        echo "Estática = " .  self::$static . "<br>";
    }

    public static function mostrarStatic()
    {
        /* echo "Não estático = {$this->naoStatic} <br>"; */ //Não é possível usar $this nesse contextos
        echo "Estática = " . self::$static . "<br>"; //self:: para usar static
    }
}

$objetoA = new A();
$objetoA->mostrarA();
A::mostrarStatic(); //Acessar função pertencente a classe

?>