<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variavel de estância';
    public static $static = 'Variável de Classe (Estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}. <br>";
        // Tentativa 1
        // echo "Estática = {$this->Static}. <br>";
        // Tentativa 2
        echo "Estática = " . self::$static . " <br>";
    }

    public static function mostraStaticA() {
        // echo "Não estática = {$this->naoStatic} <br>";
        // echo "Estática = {$static} <br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostraStaticA();

echo A::$static . "<br>";
A::mostraStaticA();