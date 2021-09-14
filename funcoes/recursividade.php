<div class="titulo">Recursividade</div>

<?php

function somarUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; --$numero){
        $soma += $numero;
    }
    return $soma;
}

echo somarUmAte(150) . '<br>';

function somaRecursivaUmAte($numero){
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(150) . '<br>';