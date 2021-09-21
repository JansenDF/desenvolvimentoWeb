<?php namespace Outro\Nome; ?>

<div class="titulo">Use/AS</div>

<?php

echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b; //Eu sei
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;

echo constante . '<br>';

use Nome\Bem\Grande as ctx;
echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>';

// use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;

echo somaReal(100, 200) . '<br>';

$a = new Classe();
echo $a->func();
$b = new \Nome\Bem\Grande\Classe();
echo $b->func();

$c = new ctx\Classe();
echo $c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
echo $d->func();