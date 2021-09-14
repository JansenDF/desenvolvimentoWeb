<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem(){
    return "Seja bem vindo!";
}

obterMensagem();
$mensagem = obterMensagem();

echo $mensagem;

function soma($a, $b){
    return $a + $b;
}

$y = 10;
$w = 3;

echo "<br>";
echo "A soma de $y e $w é: " . soma($y, $w);