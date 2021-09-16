<div class="titulo">Trait#02</div>

<?php

trait validacao {
    public $a = 'valor A';
    public function validarString($str){
        return isset($str) && $str != '';
    }
}

trait validacaoMelhor {
    public $b = 'valor B';
    private $c = 'valor C';
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;
    }
    function imprimirC(){
        echo $this->c, "<br>";
    }
}

$u = new Usuario();
var_dump($u->validarString(' '));