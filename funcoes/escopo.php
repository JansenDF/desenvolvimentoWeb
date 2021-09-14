<div class="titulo">Função e Escopo</div>

<?php

$variavel = 1;

function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

function trocarValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "<hr>";

echo "Antes: $variavel <br>";
trocarValorDeVerdade();
echo "Depois: $variavel <br>";