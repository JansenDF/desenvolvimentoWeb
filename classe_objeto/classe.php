<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    public $nome = 'Antônio';
    public $idade = 40;

    public function apresentar(){
        return "Nome: {$this->nome}; Idade: {$this->idade}";
    }
}

$c1 = new Cliente;
echo $c1->apresentar() . '<br>';

$c2 = new Cliente;
$c2->nome = 'Ana Maria';
$c2->idade = 22;
echo $c2->apresentar() . '<br>';
