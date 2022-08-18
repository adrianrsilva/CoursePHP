<div class="titulo">Classes vs Objetos</div>

<?php
    //class -> estrutura de dados(molde)
    //membros -> atributos e métodos de uma class
    //destrutor -> fecha arquivo ou recurso -> metodo especial
    //construtor -> metodo especial -> cria obj apartir de uma class
    //static -> define se atributo pertence a class ou objeto
    //acessar método usa "->" (Pertence ao Objeto)
    //acessar membros estáticos usa "::" (Pertence a Class)

    //Primeiro Exemplo

    class Cliente {
        //atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar() {
            echo "Nome: {$this->nome} <br> Idade: {$this->idade}<br>";
        }
    }

    $c1 = new Cliente();
    $c1->nome = 'Ana Silva';
    $c1->idade = 58;
    $c1->apresentar();

    echo "<br>";

    $c2 = new Cliente();
    $c2->nome = 'Thiago Silva';
    $c2->idade = 88;
    $c2->apresentar();

?>