<div class="titulo">Foreach</div>

<?php
$array = [
    'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sábado'
];

foreach ($array as $dias){
    echo "$dias <br>";
};

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matriz as $linha){
    foreach ($linha as $letras){
        echo "$letras";
    }
    echo "<br>";
}