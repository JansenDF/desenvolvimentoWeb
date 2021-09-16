<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida{
    
}
class Feijao extends Comida{

}
class Sorvete extends Comida{

}
class Pessoa{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new Sorvete();
$c2->peso = 0.65;

$p1 = new Pessoa(83);
$p1->comer($c1);
$p1->comer($c2);

echo $p1->peso;