<div class="titulo">Funções Anônimas</div>

<?php
$soma = function($a, $b){
    return $a + $b;
};
$subtracao = function($a, $b){
    return $a - $b;
};
$multiplicacao = function($a, $b){
    return $a * $b;
};
$divisao = function($a, $b){
    return $a / $b;
};

function executar($a, $b, $op, $function){
    $resultado = $function($a, $b);
    return 'O resultado é: ' . $resultado;
}

echo executar(4, 5, "+", $multiplicacao);