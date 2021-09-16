<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2(){
        echo "Executando do método 2<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1(){
        echo "Executando método 1<br>";
    }
    // public function metodo2(){
    //     echo "Executando extensão do método 2<br>";
    // }
}

$c = new Classe();
$c->metodo1();
$c->metodo2();