<div class="titulo">Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

// abstract class ClasseAbstrata extends Template {
abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando!<br>";
    }
}

// class Classe implements ClasseAbstrata {
class Classe extends ClasseAbstrata {
    function __construct($parametro) {
    
    }
    public function metodo1(){
        
    }
    public function metodo2($parametro){

    }
}
// $exemplo = Classe();
$exemplo = new Classe('...');
// $exemplo.metodo3();
$exemplo->metodo3();