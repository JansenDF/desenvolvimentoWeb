<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

        echo "Pessoa criado<br>";
    }

    public function __destruct() {
        echo "Pessoa destruída";
    }

    public function exibirPessoa(){
        return "Nome: {$this->nome}, Idade: {$this->idade}";
    }
    
}