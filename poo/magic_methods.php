<div class="titulo">Métodos Mágicos</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;
        
        function __construct($nome, $idade)
        {
            echo 'Construtor invocado!<br>';
            $this->nome = $nome;
            $this->idade = $idade;

        }

        function __destruct()
        {
            echo 'E morreu!';
        }

        public function __toString()
        {
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar(){
            echo $this . "<br>";
        }

        public function __get($atrib)
        {
            echo "Lendo atributo não declarado: {$atrib}<br>";   
        }

        public function __set($atrib, $value)
        {
            echo "Alterando atributo não declarado: {$atrib}/{$value}<br>";
        }

        public function __call($name, $arguments)
        {
            echo "Tentando executar método ${name}.";
            echo "<br>, com os parametros";
            print_r($arguments);
        }
    }

    $pessoa = new Pessoa('Ricardo', 40); // __construct
    /* $pessoa->apresentar(); //chamando o __toString
    echo $pessoa; */ //chamando o __toString
    $pessoa->nomeCompleto; //__get
    $pessoa->nomeCompleto = 'Muito legal!!!!'; //__set
 
    //chama o call porque o método não existe no objeto
    $pessoa->exec(1, 'teste', true, [1,2,3]); // __call 

?>