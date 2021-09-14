<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}

echo soma(4, 5) . '<br>';

function somaVariavel(...$numeros){ // os ... indicam que os parametros enviados serão colocados em um array ($numeros)
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma . "<br>";
}

echo somaVariavel(1, 2, 3, 4, 5) . '<br>';

$array = [6, 7, 8];
echo somaVariavel(...$array); //Ao enviar um array para a função com args variáveis, deve-se acrescentar os ... antes da variável que será passada.

function cadastro($titular, ...$dependente){
    echo "Titular: " . $titular . "<br>";
    if($dependente){
        foreach($dependente as $dep){
            echo "Dependente: " . $dep . "<br>";
        }
    }
}

cadastro("Jansen", "Lucas", "Lorena", "Leonardo", "Lorenzo");
cadastro("Daniele", "Lucas");