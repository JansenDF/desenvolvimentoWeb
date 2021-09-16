<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Canino {
    function latir() : string;
    function correr();
}

interface Mamifero {
    function mamar() : string;
}

interface Felino {
    function correr();
}

class Cachorro implements Animal, Canino, Mamifero {
    function respirar() {
        echo "Irei usar AR<br>";
    }

    function latir() : string{
        return "Au au!";
    }

    function mamar(): string {
        return "Bebi leite!";
    }
    
    function correr() {
        echo "Vrummm";
    }
}

$animal = new Cachorro();
$animal->respirar();
echo $animal->Latir() . "<br>";
echo $animal->mamar() . "<br>";
$animal->correr();

echo "<br>";

var_dump($animal);
echo "<br>";
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Canino);