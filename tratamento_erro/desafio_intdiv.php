<?php namespace contexto;

use Exception;

?>
<div class="titulo">Desafio INTDIV</div>

<!-- Sobrescreca o método intdiv para...
- Lançar uma exceção quando tentar dividir por zero
- Lançar uma exceção quando o resultado não for Inteiro
- Dividir normalmente nos demais casos

Os testes...
- intdiv com os parametros 8 e 2 [sucesso]
- intdiv com os parametros 8 e 3 [exceção]
- intdiv com os parametros 8 e 0 [exceção]
- intdiv 'original' com os parametros 8 e 3 [sucesso] -->

<?php

function intdiv($a, $b){
    if($b == 0) {
        throw new \Exception('Divisão por zero');
        echo 'exceção';
    }elseif($a % $b != 0) {
        throw new \Exception('Resultado NÃO inteiro');
        echo 'exceção';
    }else {
        return $a / $b . ' sucesso<br>';
    }
}

try{
    echo intdiv(8,3);
}catch(\Exception $e){
    echo "exceção<br>";
    echo "Motivo: {$e->getMessage()}<br>";
}
try{
    echo \intdiv(8,3);
    echo ' sucesso<br>';
}catch(\Exception $e){
    echo "Motivo: {$e->getMessage()}<br>";
}
