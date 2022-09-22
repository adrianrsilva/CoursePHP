<div class="titulo">Herança PHP</div>

<?php
    
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            echo 'Pessoa Criada! <br>';
        }

        function __destruct()
        {
            echo 'Tchau!!';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos <br>";
        }

    }

    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login)
        {
            //$this->nome = $nome;
            //$this->idade = $idade;
            parent::__construct($nome, $idade);
            $this->login = $login;
            echo 'Usuario Criado!! <br>';
        }

        function __destruct()
        {
            echo 'Usuario diz: Tchau!!';   
            parent::__destruct();
        }

        public function apresentar()
        {
            echo "@{$this->login}:!!! ";
            parent::apresentar();
        }
    }

    $usuario = new Usuario('Adrian', 21, 'adriansilva');
    $usuario->apresentar();

?>