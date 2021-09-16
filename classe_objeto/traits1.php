<div class="titulo">Traits #01</div>

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
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
    function imprimirC(){
        echo $this->c, "<br>";
    }
}

$u = new Usuario();
var_dump($u->validarString(" "));
var_dump($u->validarStringMelhor(" "));
echo "<br>", $u->a;
echo "<br>", $u->b;
echo "<br>", $u->imprimirC();
