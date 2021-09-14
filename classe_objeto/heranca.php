<div class="titulo">Herança</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $novaIdade){
        $this->nome = $nome;
        $this->idade = $novaIdade;
        echo "Objeto Pessoa criado! <br>";
    }

    function __destruct(){
        echo "Objeto Pessoa destruído! <br>";
    }
    
    public function Exibir(){
        return "{$this->nome}, {$this->idade} anos";
    }
}

class Usuario extends Pessoa {
    public $login;
    
    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Objeto Usuário criado! <br>";
    }

    function __destruct(){
        echo "Objeto Usuário destruído! <br>";
    }

    public function exibir(){
        return "Nome: {$this->nome}, idade: {$this->idade} anos e login: {$this->login}. <br>";
    }
}

$leo = new Pessoa("Leonardo", "09");
echo $leo->Exibir() . "<br>";
$jansen = new Pessoa("Jansen", "34");
echo $jansen->Exibir() . "<br>";
unset($jansen);
$jansen = new Usuario("Jansen", "34", "jansen.lima");
echo $jansen->Exibir() . "<br>";
