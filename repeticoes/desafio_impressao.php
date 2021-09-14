<div class="titulo">Desafio Impressão</div>

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach ($array as $indice => $letras){
    if($indice % 2 == 0){
        echo "$letras";
    };
}