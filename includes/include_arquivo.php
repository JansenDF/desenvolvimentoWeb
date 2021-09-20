<?php

echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')){ //Se a função NÃO existir, será carregada normalmente.
    function soma($a, $b){
        return $a + $b;
    }
}