<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>

<?php

echo __NAMESPACE__ . '<br>';
const constante1 = 123;
echo constante1 . '<br>';
define('contexto\constante2', 234);
echo constante2 . '<br>';
define(__NAMESPACE__ . 'constante3', 345);
// echo constant(__NAMESPACE__ . '\constante3');    
define('outroContexto\constante4', 456);
echo \outroContexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(2,3) . '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
}

echo strpos('Exemplo de texto para buscar', 'buscar');
echo \strpos('Exemplo de texto para buscar', 'buscar');