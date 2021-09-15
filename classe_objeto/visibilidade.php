<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Público = {$this->publico} <br>";
        echo "Class A) Protegido = {$this->protegido} <br>";
        echo "Class A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHeranca() {
        echo "Vou ser transmitido por herança!<br>";
    }

    private function naoMostrarA() {
        echo "Não vou mostrar!<br>"; //Somente será mostrado se invocado na função pública dentro da classe.
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrarA();

echo "<hr>";

class B extends A {
    public function mostrarB() {
        echo "Class B) Público = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) Privado = {$this->privado} <br>";

        parent::vaiPorHeranca();
    }
}
$b = new B();
$b->mostrarA(); //Exibe função de A pq B herdou (extends).
$b->mostrarB();

// $b->vaiPorHeranca(); não imprime