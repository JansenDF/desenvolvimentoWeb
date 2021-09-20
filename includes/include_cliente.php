<?php

include('include_pessoa.php');
class Cliente extends Pessoa {
    public $login;

    public function __construct($nome, $idade, $login) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;

        echo "Cliente criado!<br>";
    }

    public function __destruct() {
        echo "Objeto destruído<br>";
    }

    public function exibirCliente(){
        return "Nome: {$this->nome}, Idade: {$this->idade}, login: {$this->login}";
    }
}