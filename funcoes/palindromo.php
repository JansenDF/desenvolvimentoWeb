<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return "Não";
        }
    }
    return "Sim";
}
// echo palindromo('ana');
// echo "<br>";
// echo palindromo('Jansen');
// echo "<br>";
// echo palindromo('Dani');
// echo "<br>";
// echo palindromo('hannah');

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? "Sim" : "Não";
}

echo palindromoSimples('ana');
echo "<br>";
echo palindromoSimples('jana');
echo "<br>";
echo palindromoSimples('hannah');
echo "<br>";