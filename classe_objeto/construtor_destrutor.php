<div class="titulo">Construtor_Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    public function apresentar() {
        return "{$this->nome}, {$this->idade} anos.";
    }
}

$pessoa = new Pessoa("Jansen");
echo $pessoa->apresentar() . "<br>";
unset($pessoa); //UNSET é o responsável por chamar o destrutor